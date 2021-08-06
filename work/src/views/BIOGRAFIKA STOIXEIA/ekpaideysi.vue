<template>
<div>
<div class="return" >
  
<CRow  v-for="info in infodata"  :key="info.id"  :class="{editing: info.id == editedUser}" v-cloak >  
    <CCol  sm="6" md="6">
      <CCard>
        <CCardHeader style="text-align:center" >
           <strong><b>Εκπαίδευση</b> {{info.id}}</strong> 
        </CCardHeader>
        <CCardBody>
          <div class="view" >  
             <CInput
              :disabled="edit2" 
              horizontal
              label="Πτυχίο - Επιμόρφωση"
             :value='info.ptixio_epimorfosi'
              />
           </div>
           <div class="edit">
              <CInput
                label="Πτυχίο - Επιμόρφωση"
                horizontal
               v-model="info.ptixio_epimorfosi"
               /> 
           </div>
            <div class="view" >
              <CInput
              :disabled="edit2" 
              horizontal
              label="Τίτλος"
              :value='info.titlos'
              />
            </div>
            <div class="edit">
               <CInput
               label="Τίτλος"
               horizontal
               v-model="info.titlos"
               /> 
             </div>
             <div class="view" >
               <CInput
                 horizontal
                 :disabled="edit2"
                 label="Πανεπιστήμιο - Εκπ.Φορέας - Τοποθεσία:"
                :value='info.university_ekp_foreas'
               />
             </div>
             <div class="edit">
               <CInput
               label="Πανεπιστήμιο - Εκπ.Φορέας - Τοποθεσία:"
                horizontal 
                v-model="info.university_ekp_foreas"
              /> 
            </div>
            <div class="view" >
              <CInput
                :disabled="edit2" 
                 horizontal
                 label="Έτος"
                :value='info.year'
              /> 
            </div>
            <div class="edit">
               <CInput
                 label="Έτος"
                 horizontal
                
                 v-model="info.year"
               /> 
            </div>
      </CCardBody> 
      <div  class="view">
        <CButtonGroup class="mx-1 d-sm-down-none">  
            <CButton color="info" @click="editform(info.id)" >Edit</CButton>
            <CButton   color="danger"  @click="deleteform(info.id)">Delete</CButton>   
        </CButtonGroup>
       </div>
       <div class="edit">
        <CButtonGroup class="mx-1 d-sm-down-none">     
              <CButton color="secondary"    @click="saveform(info.ptixio_epimorfosi,info.titlos,info.university_ekp_foreas,info.year,info.id)">Save</CButton>
              <CButton color="secondary" @click="cancel()"> Cancel</CButton>      
        </CButtonGroup>
       </div>
     
  
      </CCard>
      
   </CCol>
 </CRow>
  
 </div>
 
 <div v-show="remove" >
 <CRow>  
    <CCol  sm="6" md="6">
      <CCard>
        <CCardHeader style="text-align:center" >
           <strong><b>Εκπαίδευση</b> </strong> 
        </CCardHeader>
        <CCardBody>
          <CInput
            for="ptixio_epimorfosi"
              label="Πτυχίο - Επιμόρφωση"
              horizontal
              v-model="ptixio_epimorfosi"  
            /> 
            <CInput
            for="titlos"
             horizontal
             label="Τίτλος"
            v-model="titlos"
             />
               <CInput
               for="university_ekp_foreas"
             horizontal
             label="Πανεπιστήμιο - Εκπ.Φορέας - Τοποθεσία:"
            v-model="university_ekp_foreas"
             />
            
                
           <div class="form-group">
           <div class="col-md-12">
           <label>Ετος</label>
                  <select class="form-control" @change="changeyear($event)"  v-model="selectyear"  >
                    <option value="2021" selected >Choose</option>
                   <option v-for="info in alldatayear"  :key="info.year" >{{ info.year }}</option>
                        <option ></option>
                  </select>
           </div>
               </div> 
        </CCardBody>
         <CButtonGroup>
         <CButton type="submit"  @click="submitdata()"  color="info" size="sm">
           <CIcon name="cil-check-circle"/>
            Αποθήκευση
         </CButton>
         <CButton type="submit"  @click="deletedata()" color="danger" size="sm">
           <CIcon name="cil-ban"/>
            Διαγραφή 
         </CButton>
         </CButtonGroup>

      </CCard>
   </CCol>
 </CRow>
 </div>

 <button class="btn btn-success" @click="addForm()"> Προσθήκη Νέου Πεδίου</button>

</div>
</template>


<script>
import axios from'axios';
export default {
   name:'forms',
   
  
data() {
  return {
    remove:false ,//gia na eksaffanizete h form
    edit2:true,
    editMode: false,
    editedUser: null,
    ptixio_epimorfosi:'',
    titlos:'',
    university_ekp_foreas:'',
    infodata:'',
    selectyear:'',
    alldatayear:'', 
   }
},
methods:{
  cancel(){
     this.editedUser =null; 
     this.getresults();
  },
editform(id){
      this.editedUser = id; 
},
deleteform(id){
  if(confirm("Are you sure you want to remove this data?"))
   {
     axios.post('http://localhost:81/work/src/views/api.biografikast/delete_ekpedeysi.php',
       {action:'delete', id:id}).then((response)=>
         {
           console.log(response.data);
           this.getresults();
            //alert(response.data.message);
           });
  }
//-------------------------------
    this.editedUser =null; 
},
saveform(ptixio_epimorfosi,titlos,university_ekp_foreas,year,id){
         axios.post('http://localhost:81/work/src/views/api.biografikast/edit_ekpedeysi.php',
       { 
        id:id,
        ptixio_epimorfosi:ptixio_epimorfosi, //to deytero einai ayto poy erxete stin sinartisi
        titlos:titlos,
        university_ekp_foreas:university_ekp_foreas,
        selectyear:year
       }).then((response)=>
         {
           this.titlos=response.data.titlos;
           this.author=response.data.author;
           console.log(response.data);
           this.getresults();
          // alert(response.data.message);//data update
           });
//-------------------------------
    this.editedUser =null;
},
changeyear (event) {
     this.selectyear = event.target.options[event.target.options.selectedIndex].text
    
    },
addForm:function(){ 
      this.remove=true 
  },
  clearForm() {
      this.ptixio_epimorfosi = "";
      this.titlos = "";
       this.university_ekp_foreas = "";
      this.selectyear="";
      
    },
  
submitdata(){
  if(!this.titlos){
    alert("NEED TITLE");
  }else if(!this.selectyear){
    alert("NEED YEAR");
  }
else{
 axios.post('http://localhost:81/work/src/views/api.biografikast/ekpedeusi.php',
        {
         ptixio_epimorfosi:this.ptixio_epimorfosi,
         titlos:this.titlos,
         university_ekp_foreas:this.university_ekp_foreas,
         selectyear:this.selectyear
        }
      ).then((response)=>{
       console.log(response.data);
       this.getresults();
        });
      this.clearForm();
      this.remove=false   
}
 },
deletedata(){
  this.clearForm();
  this.remove=false;
},

getresults(){
axios.get('http://localhost:81/work/src/views/api.biografikast/return-ekpaideusi.php',
        {act:'getdata' }
      ).then((response)=>{this.infodata=response.data;
        console.log(response.data)
        
        });
},
   
},

mounted(){
  axios.post('http://localhost:81/work/src/views/api/year.php',
        {act:'giveyear' }
      ).then((response)=>{this.alldatayear=response.data;
        console.log(response.data)
        
        });
        axios.get('http://localhost:81/work/src/views/api.biografikast/return-ekpaideusi.php',
        {act:'getdata' }
      ).then((response)=>{this.infodata=response.data;
        console.log(response.data)
        
        });
},
}

</script>



<style lang="scss" scoped>
.action{
  *{
  padding-right:15px 
  }
}
.view {
  border-color: transparent;
  background-color: initial;
  color: initial
}
.table{
 
 border-collapse: collapse;
  width: 100%;
 
}

 .edit {
      display: none;
    }
 .editing .edit {
      display: block
    }
    .editing .view {
      display: none;
    }
    

</style>