<template>
  <CHeader fixed with-subheader light>
    <CToggler
      in-header
      class="ml-3 d-lg-none"
      @click="$store.commit('toggleSidebarMobile')"
    />
    <CToggler
      in-header
      class="ml-3 d-md-down-none"
      @click="$store.commit('toggleSidebarDesktop')"
    />
    <CHeaderBrand class="mx-auto d-lg-none" to="/">
      <CIcon name="logo" height="48" alt="Logo"/>
    </CHeaderBrand>
    <CHeaderNav class="d-md-down-none mr-auto">
      <CHeaderNavItem class="px-3">
        <CHeaderNavLink to="/Erot">
          Ερωτηματολόγια 
        </CHeaderNavLink>
      
      </CHeaderNavItem>
    <CButton color="primary" class="butt" type="button" @click="logout"  >
      <CIcon name="cil-lock-locked" /> Logout</CButton>
      
    <h3> Καλώς ήρθες :
     {{user.name}} {{user.surname}} {{user.am}}</h3>
    </CHeaderNav>
    
    <CSubheader class="px-3">
      <CBreadcrumbRouter class="border-0 mb-0"/>
    </CSubheader>
  </CHeader>
</template>

<script>

import axios from 'axios'


export default {
  name: 'TheHeader',
 
  data(){
    return{
      token:localStorage.getItem('token'),
      user:[],
    }
  },
    methods: {
    logout() {
      localStorage.removeItem('token');
      this.$router.push('/pages/login');
    },

  

  },
created(){
     axios.post('http://localhost:81/work/login/validate.php',{ jwt: this.token})
       .then(resp=>{
          if(resp.data.res!=1){
          this.user=resp.data.user
          localStorage.setItem('user_name',resp.data.user.name)
        }else{
          this.$router.push('/pages/login')
        }
  })
        .catch(err => console.log(err));
  
  }
  
  
}
</script>

<style  scoped>
.butt{
  position: absolute;
right: 10px;
top: 5px;
}

</style>
