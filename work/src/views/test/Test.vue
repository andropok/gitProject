<template>
  <div>
    <CRow  >
      <CCol lg="6">
        <CTableWrapper :items="getShuffledUsersData()">
          <template #header>
            <CIcon name="cil-grid"/> Simple Table
            <div class="card-header-actions">
              <a 
                href="https://coreui.io/vue/docs/components/nav" 
                class="card-header-action" 
                rel="noreferrer noopener" 
                target="_blank"
              >
                <small class="text-muted">docs</small>
              </a>
            </div>
          </template>
        </CTableWrapper>
      </CCol>

      <CCol sm="4">
        <CCard>
          <CCardHeader>
            <strong>PERSONAL INFO </strong><small>Form</small>
          </CCardHeader>
          <CCardBody>
            <CInput
              label="NAME"
              placeholder="Enter your  name"
            />
            <CInput
              label="Surname"
              placeholder="Enter your  surname"
            />
            <CInput
              label="Street"
              placeholder="Enter street name"
            />
            <CRow>
              <CCol sm="8">
                <CInput
                  label="City"
                  placeholder="Enter your city"
                />
              </CCol>
              <CCol sm="4">
                <CInput
                  label="Postal code"
                  placeholder="Postal code"
                />
              </CCol>
            </CRow>
            <CInput
              label="Country"
              placeholder="Country name"
            />
          </CCardBody>
           <CCardFooter>
            <CButton type="submit" size="sm" color="primary"><CIcon name="cil-check-circle"/> Submit</CButton>
            <CButton type="reset" size="sm" color="danger"><CIcon name="cil-ban"/> Reset</CButton>
          </CCardFooter>
        </CCard>
      </CCol>
    </CRow>
    
 <CCard>
        <CCardHeader>Radar Chart</CCardHeader>
        <CCardBody> <CChartRadar
    :datasets="defaultDatasets"
    :options="defaultOptions"
    :labels="[
      'Eating', 'Drinking', 'Sleeping', 'Designing',
      'Coding', 'Cycling', 'Running'
    ]"
  /></CCardBody>
      </CCard>


    
  </div>
</template>

<script>
import CTableWrapper from './Table.vue'
import Testdata from './testdata'
import { CChartRadar } from '@coreui/vue-chartjs'
export default {
  name: 'Tables',
  components: { CTableWrapper,CChartRadar },
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
      return this.shuffleArray(Testdata.slice(0)) //!!
    }
  },
   computed: {
    defaultDatasets () {
      return [
        {
          label: '2019',
          backgroundColor: 'rgba(179,181,198,0.2)',
          borderColor: 'rgba(179,181,198,1)',
          pointBackgroundColor: 'rgba(179,181,198,1)',
          pointBorderColor: '#fff',
          pointHoverBackgroundColor: '#fff',
          pointHoverBorderColor: 'rgba(179,181,198,1)',
          tooltipLabelColor: 'rgba(179,181,198,1)',
          data: [65, 59, 90, 81, 56, 55, 40]
        },
        {
          label: '2020',
          backgroundColor: 'rgba(255,99,132,0.2)',
          borderColor: 'rgba(255,99,132,1)',
          pointBackgroundColor: 'rgba(255,99,132,1)',
          pointBorderColor: '#fff',
          pointHoverBackgroundColor: '#fff',
          pointHoverBorderColor: 'rgba(255,99,132,1)',
          tooltipLabelColor: 'rgba(255,99,132,1)',
          data: [28, 48, 40, 19, 96, 27, 100]
        }
      ]
    },
    defaultOptions () {
      return {
        aspectRatio: 1.5
      }
    }
  }


}
</script>
