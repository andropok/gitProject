import Vue from 'vue'
import Router from 'vue-router'

// Containers
const TheContainer = () => import('@/containers/TheContainer')

// Views
const Dashboard = () => import('@/views/Dashboard')

const Test = () => import('@/views/test/Test')

const Form = () => import('@/views/form/Form')
const MOAksiologisi = () => import('@/views/MOAksiologisis/aksiologisi')
const MO = () => import('@/views/MOAksiologisis/mo-aks')
const BIOGRAFIKAST = () => import('@/views/BIOGRAFIKA STOIXEIA/BIOGRAFIKAST')
const EKPAIDEYSI = () => import('@/views/BIOGRAFIKA STOIXEIA/ekpaideysi')
const ProptixiakaMath = () => import('@/views/ProptixiakaΜathimata/ProptixiakaMath')
const EpeksergasiaMath = () => import('@/views/ProptixiakaΜathimata/epeksergasia')
const PerigrammaMath = () => import('@/views/ProptixiakaΜathimata/perigrama')

//Extra
const Login = () => import('@/views/LOGIN/Login')

// Users
const Users = () => import('@/views/users/Users')
const User = () => import('@/views/users/User')

Vue.use(Router)

export default new Router({
  mode: 'hash', // https://router.vuejs.org/api/#mode
  linkActiveClass: 'active',
  scrollBehavior: () => ({ y: 0 }),
  routes: configRoutes()
})

function configRoutes () {
  return [
    {
      path: '/',
      redirect: '/dashboard',
      name: 'Home',
      component: TheContainer,
      children: [
        {
          path: 'dashboard',
          name: 'Dashboard',
          component: Dashboard
        },
        
        {
          path: 'test',
          name: 'test',
          component: Test
        },
        {
          path: 'form',
          name: 'form',
          component: Form
        },
        {
          path: 'MO',
          name: 'mo-aks',
          component: MO
        },
        {
          path: 'MOAksiologisis',
          name: 'aksiologisi',
          component: MOAksiologisi
        },
        {
          path: 'BIOGRAFIKAST',
          name: 'Βιογραφικά Στοιχεία', //emfanizete sto header

          component: BIOGRAFIKAST
        },
        {
          path: 'EKPAIDEYSI',
          name: 'Εκπαίδευση', //emfanizete sto header

          component: EKPAIDEYSI
        },
       
        {
          path: 'ProptixiakaMath',
          name: 'Προπτυχιακά Μαθήματα', //emfanizete sto header

          component: ProptixiakaMath
        },
        {
          path: 'EpeksergasiaMath',
          name: 'Προπτυχιακά Μαθήματα/Επεξεργασία', //emfanizete sto header

          component: EpeksergasiaMath
        },
        {
          path: 'PerigrammaMath',
          name: 'Περίγραμμα Μαθήματος', //emfanizete sto header

          component: PerigrammaMath
        },
        {
          path: 'users',
          meta: {
            label: 'Users'
          },
          
          children: [
            {
              path: '',
              name: 'Users',
              component: Users
            },
            {
              path: ':id',
              meta: {
                label: 'User Details'
              },
              name: 'User',
              component: User
            }
          ]
        },
        
        
        
      ]
    },
       
    {
      path: '/pages',
      redirect: '/pages/404',
      name: 'Pages',
      component: {
        render (c) { return c('router-view') }
      },
      children: [
       
        {
          path: 'login',
          name: 'Login',
          component: Login
        }
       
      ]
    }
    
  ]
}

