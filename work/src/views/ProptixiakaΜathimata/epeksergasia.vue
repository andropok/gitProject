<template>
<div>





<div>
   <router-link :to="{ path: '/MOAksiologisis'}"  replace>
      Back
    </router-link>  
    
</div>


<div class="table" >
  <br>
  <table class="col-md-12 " border="3" lg="6" >
    <thead >
    <tr>
    <th scope="col" >Etos</th>
    <th scope="col"  >KODIKOS Mathimatos</th>
    <th scope="col">Apantisi</th>
    <th scope="col">KODIKOS erotimatologiou</th>
    <th scope="col">Arithmos erotimatolgiou</th>
    </tr>
    </thead>
  <tbody >
    <tr  v-for="event in allaksiologisis" :key="event">
    <td>{{event.etos}}</td>
    <td>{{event.math}}</td>
    <td>{{event.apantisi}}</td>
    <td>{{event.koderot}}</td>
    <td>{{event.aritherot}}</td>
    </tr>
  </tbody>
  </table>
</div>


</div>
</template>

<script>
import axios from'axios';
export default {
   name: 'mo-aks',
  data() {
    return {
     UsersData:[],
allaksiologisis:[],
mathima:this.$route.query.math,
etos:this.$route.query.etos,
tmima:this.$route.query.name,
     }
  },
  
methods :{
    

 
},
mounted(){
 axios.post('http://localhost:81/work/src/views/api.univ/aksiologisis.php',
        {act:'getdata',
        mathima:this.mathima,
        etos:this.etos,
        tmima:this.tmima
        },
      ).then((response)=>{
        this.allaksiologisis=response.data;
        console.log(response.data)
        });

},

}

</script>

