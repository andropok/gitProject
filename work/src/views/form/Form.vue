<template >

 <div>
   <h1>hello</h1>

<div class="table">
  
      <table class="col-md-12 " border="3" lg="6" v-for="data in formdata  " :key="data">
        <thead>
          <tr  >
            <th scope="col" >ID</th>
            <th scope="col"  >TITLE</th>
            <th scope="col">AYTHOR</th>
            <th scope="col">YEAR</th>
            <th scope="col">TYPE</th>
            <th scope="col"  >INFO</th>
            <th></th>
            <th></th>
            
          </tr>
        </thead>
        <tbody id=data.id>
          <tr>
            <td>{{data.id}}</td>
            <td><input type="text"     v-model="data.title" :disabled="on" :class="{view: onEdit}"  ></td>
            <td ><input type="text" v-model="data.author" :disabled="on" :class="{view: onEdit}" ></td>
            <td>       
             <select class="form-control"  v-model="data.year"  :disabled="on" :class="{view: onEdit}" >
                    <option value="null" disable >Choose</option>
                    <option v-for="info in alldatayear"  :key="info.year"    >{{ info.year }}</option>
                    <option ></option>
                  </select>
            </td>
            <td>
               <select class="form-control"  v-model="data.types"  :disabled="on" :class="{view: onEdit}" >
                    <option value="null" disable >Choose</option>
                    <option v-for="info in alldatatype"  :key="info.type"    >{{ info.title }}</option>
                    <option ></option>
                  </select>
             
            </td>
            <td ><input type="text" v-model="data.info" :disabled="on" :class="{view: onEdit}" ></td>
            <td  @click="onEdit(data.id,data.title,data.author,data.year,data.types,data.info)" > {{ edit ? 'Save' : 'Edit' }} </td>
            <td @click="removerow(data.id)" > {{ "Delete"}} </td>
            
           
            
          </tr> 
           
        </tbody>
        
      </table>
   

</div>


 <button class="btn btn-success" @click="addForm()"> ADDFORM </button>

 <div v-show="remove" >
 <CRow>  
    <CCol  sm="4" md="6">
      <CCard>
        <CCardHeader style="text-align:center" >
           <strong>PERSONAL INFO  </strong> <small  >Form {{}} </small>  
        </CCardHeader>
        <CCardBody>
          <CInput
            for="title"
              label="Τιτλoς"
              placeholder="title"
              horizontal
              v-model="form.title"  
            /> 
            <CInput
             horizontal
             label="Συγγραφης"
            v-model="form.author"
             />
             <CTextarea
              label="Περιγραφή"
              placeholder="Content..."
              horizontal
              rows="5"
                v-model="form.box"
              />
                
           <div class="form-group">
             <div class="col-md-12">
                <label for="Types" >TYPE</label>  
               
                  <select class="form-control" @change="changetype($event)"  v-model="selecttype" >
                      <option  selected >Please select one</option>
                   <option v-for="info in alldatatype"  :key="info.title"   >{{info.title}}</option>
                  </select>
             
                <label>YEAR</label>
                  <select class="form-control" @change="changeyear($event)"  v-model="selectyear"  >
                    <option value="2021" selected >Choose</option>
                   <option v-for="info in alldatayear"  :key="info.year" >{{ info.year }}</option>
                        <option ></option>
                  </select>
           </div>
               </div> 
        </CCardBody>
         <CButton type="submit"  @click="submitdata()" color="info" size="sm">
            ADD TABLE 
         </CButton>

      </CCard>
   </CCol>
 </CRow>
 </div>
</div>
</template>

<script>
import axios from'axios';
export default {
   name:'forms',
  
data() {
  return {
    remove:false ,//gia na eksaffanizete h form
     on:true,   //gia na energopoio to edit ston pinaka
     edit: false,//gia na allazo to edit/saveS
     allinfo:[],
     id:'1',
form:{
id:'',
title:'',
author:'',
box:'',
},

selectyear:'',
selecttype:'',//perno to type apo tin form kai to bazo stin database
selecttypes:'',//bazo mesa to edit types kai kano ubdate stin database
selectid:'',
formdata:'',

alldatatype:'',
alldatayear:'',

  
 }
 
},

methods:{
   changeyear (event) {
      this.selectyear = event.target.options[event.target.options.selectedIndex].text
    },
changetype (event) {
      this.selecttype = event.target.options[event.target.options.selectedIndex].text

    },
  addForm:function(){
     
      this.remove=true 
  },
  clearForm() {
      this.form.title = "";
      this.form.author=" ";
      this.form.box=" ";
     
      this.selectyear="",
      this.selecttype=""
    },
submitdata(){
  if(!this.form.title){
    alert("NEED TITLE");
  }else if(!this.selectyear){
    alert("NEED YEAR");
  }
  else{
 axios.post('http://localhost:81/work/src/views/api/take.php',
        {
          
        id:this.form.id++,
         title:this.form.title,
         author:this.form.author,
         box:this.form.box,
         selectyear:this.selectyear,
         selecttype:this.selecttype
        }
      ).then((response)=>{
       console.log(response.data);
      this.getresults();
       alert(response.data.message);
        });
  }

      this.clearForm();
      this.remove=false   
 },
getresults(){
axios.get('http://localhost:81/work/src/views/api/formbase.php',
        {act:'getdata' }
      ).then((response)=>{this.formdata=response.data;
        console.log(response.data)
        
        });
},
removerow(id){
    
 if(confirm("Are you sure you want to remove this data?"))
   {

axios.post('http://localhost:81/work/src/views/api/delete.php',
       {action:'delete', id:id}).then((response)=>
         {
           console.log(response.data);
           this.getresults();
            alert(response.data.message);
           });
   }

    },
     onEdit(id,title,author,year,types,info){
        this.edit = !this.edit;
         this.on=!this.on;
        
 // this.myModel=!this.myModel;
  this.actionButton="UBDATE";
if(this.edit==false){
         axios.post('http://localhost:81/work/src/views/api/edit.php',
       {action:'edit', 
       id:id, 
         title:title,
         author:author,
         box:info,
         selectyear:year,
         selecttypes:types
       
       
       }).then((response)=>
         {
           this.form.title=response.data.title;
            this.form.author=response.data.author;
           console.log(response.data);
            this.getresults();
            alert(response.data.message);
           });
   
}
    },

    
},
mounted(){

this.getresults();

axios.post('http://localhost:81/work/src/views/api/type.php',
        {act:'givetype' }
      ).then((response)=>{this.alldatatype=response.data;
        console.log(response.data)
        });

axios.post('http://localhost:81/work/src/views/api/year.php',
        {act:'giveyear' }
      ).then((response)=>{this.alldatayear=response.data;
        console.log(response.data)
        });



axios.get('http://localhost:81/work/src/views/api/formbase.php',
        {act:'getdata' },
        {
         headers: {
           
            
          }
        }
      ).then((response)=>{this.formdata=response.data;
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
</style>