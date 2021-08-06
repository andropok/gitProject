<template>
<div>
<h2> Προπτυχιακά Μαθήματα</h2>
<br>
<table>

          
          <tr>

           <th>
           <label >Τμήμα :</label></th>
           <th>
              <select   class="form-control" @change="select_univers($event)"  v-model="name"   >
              
                <option v-for="info in formdata"  :key="info.name"  v-bind:value="info.name" >{{info.title}}</option>
              </select>   
              </th>
          </tr>
</table>

<table>
  <tr>
               <th>   
              <label >Ακαδημαϊκό Έτος :</label>
               </th>

               <th>
                <select   class="form-control" @change="select_year($event)"   >
                  <option   value="id"  selected >Choose</option>
                  <option v-for="(info, index) in akadimaiko_etos"  :key="index.etos"   > {{info.etos}}</option>
                </select>
                </th>
              </tr>
           
</table>                  
            <button class="btn btn-success" @click="return_info()"> SEARCH </button>
        

<div class="table" >
  <br>
  <table class="col-md-12 " border="3" lg="6" >
    <thead >
    <tr>
    <th scope="col" >Έτος</th>
    <th scope="col"  >Κωδικός Μαθήματος</th>
    <th scope="col">Μάθημα</th>
    <th scope="col">Διδάσκων</th>
    <th scope="col">Εξάμηνο</th>
    </tr>
    </thead>
  <tbody >
    <tr v-for="event in allinfo" :key="event"  >
    <td  >{{event.etos}}</td>
    <td>{{event.math}}</td>
    <td>{{event.title}}</td>
    <td>{{event.teacher}}</td>
    <td>{{event.semester}}</td>
     <td>
  
   <button @click="shareDetails(event.math,event.etos,name)"  class="btn-primary my-3"> 
      Details
   </button>
                    
  </td>      
    </tr>
  </tbody>
  </table>
</div>



</div>
</template>

<script>
import axios from'axios';

export default {
  name: 'aksiologisi',
 
  data() {
    return {
      formdata:null,
      akadimaiko_etos:null,
      allinfo:[],
      allaksiologisis:[],
      name:null,
      selectunivers:null,
      selectyear:null,
     }
  },
methods :{
shareDetails(math,etos,name){
    this.$router.push({path:"EpeksergasiaMath",query:{etos,name,math}});
  },
 
select_univers (event) {
      this.selectunivers = event.target.options[event.target.options.selectedIndex].text
    },
select_year (event) {
      this.selectyear = event.target.options[event.target.options.selectedIndex].text
    },
return_info(){  
  axios.post('http://localhost:81/work/src/views/api.univ/info.php',
        {act:'getdata',
        selectunivers:this.name,
        selectyear:this.selectyear
        },
      ).then((response)=>{
        this.allinfo=response.data;
        console.log(response.data)
        });
  },
},
mounted(){
  axios.post('http://localhost:81/work/src/views/api.univ/university.php',
        {act:'getdata1' },
      ).then((response)=>{
        this.formdata=response.data;
        console.log(response.data)
        });
 axios.post('http://localhost:81/work/src/views/api.univ/ak.etos.php',
        {act:'getdata1' },
      ).then((response)=>{this.akadimaiko_etos=response.data;
        console.log(response.data)
        });
      

},

}

</script>

