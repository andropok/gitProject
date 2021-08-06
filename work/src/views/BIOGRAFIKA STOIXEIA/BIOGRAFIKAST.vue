<template>
  <div >
  

 <CRow class="table1" >
      <CCol sm="6">
        <CCard>
          <CCardHeader> 
          <CIcon name="cil-justify-center"/>
            <strong><b>Βιογραφικά Στοιχεία </b></strong>
          </CCardHeader>
           
          <CCardBody    >
            <CRow >
              <CCol sm="12">
                <CInput 
                v-for="info in bio"  :key="info.id"
                disabled
                 :border="border"
                  label="Ονομα Επώνυμο :"
                 class="card-header-action" 
                  horizontal
                   :value='info.name'
                />
              
                <CInput 
                v-for="info in bio"  :key="info.id"
                disabled
                  label="Τμήμα :"
                   class="card-header-action" 
                  horizontal
                   :value='info.tmima'
                />
             
                <CInput 
                v-for="info in bio"  :key="info.id"
                disabled
                  label="Βαθμίδα :"
                   class="card-header-action" 
                  horizontal
                   :value='info.vathmida'
                />
          
                <CInput 
                v-for="info in bio"  :key="info.id"
                disabled
                  label="ΦΕΚ Διορισμού-Αντικείμενο :"
                   class="card-header-action" 
                  horizontal
                   :value='info.fek_dioarismou'
                />
              
                <CInput 
                v-for="info in bio"  :key="info.id"
                disabled 
         
                  label="Τηλέφωνο/α-Fax :"
                   class="card-header-action" 
                  rel="noreferrer noopener" 
                  target="_blank"
                  href="https://coreui.io/vue/docs/components/jumbotron" 
                  horizontal
                  
                 
                   :value='info.number'
                   
                />
           
            
                <CInput 
                v-for="info in bio"  :key="info.id"
                disabled
                  label="Email :"
                   type="email"
                   
                    prepend="@"
                     class="card-header-action" 
                  horizontal
                   :value='info.email'
                />
           
                <CInput 
                v-for="info in bio"  :key="info.id"
                disabled
                  label="Προσωπική Ιστιοσελίδα :"
                   class="card-header-action" 
                  horizontal
                   :value='info.web_site'
                />
              </CCol>
            </CRow>
            
          </CCardBody>
        </CCard>
      </CCol>
 </CRow>
   
  </div>
</template>

<script>
//import CTableWrapper from './Table'
//import usersData from './UsersData'
import axios from'axios';

export default {
  name: 'Tables',

  data(){
  return{
      bio:''
   
  }
  },
  //components: { CTableWrapper },
  methods: {
    shuffleArray (array) {
      for (let i = array.length - 1; i > 0; i--) {
        let j = Math.floor(Math.random() * (i + 1))
        let temp = array[i]
        array[i] = array[j]
        array[j] = temp
      }
      return array
    },

    getShuffledUsersData () {
        
      return this.bio
    }
  },
  mounted(){
     axios.post('http://localhost:81/work/src/views/api.biografikast/biografika.php',
        {act:'givetype' }
      ).then((response)=>{this.bio=response.data;

        console.log(response.data)
        }); 
  }
}
</script>

<style>
.table1{
  align-items: flex-start;
  margin-right: 70px;
   padding: 10px;

}
.col{
  
background-color: #d8dbe0;

}

</style>