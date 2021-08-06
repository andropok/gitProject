<template>
<div>
<h2>ΠΕΡΙΓΡΑΜΜΑ ΜΑΘΗΜΑΤΟΣ</h2>

<CRow>
      <CCol lg="12">
       
          <CCard >
            <CCardHeader>
              <CIcon name="cil-pencil"/> (1) ΓΕΝΙΚΑ

            </CCardHeader>
           
              <CCardBody>
                

                <CInput
               
                  label="ΣΧΟΛΗ"
                  description="Here's some help text"
                  type="text"
                />
                 <CInput
                  label="ΤΜΗΜΑ"
                  description="Here's some help text"
                  type="text"
                />
                 <CInput
                  label="ΕΠΙΠΕΔΟ ΣΠΟΥΔΩΝ "
                  description="Here's some help text"
                  type="text"
                />

                <CRow>
                <CCol :col="12 - 4">
                 <CInput
                  label="ΚΩΔΙΚΟΣ ΜΑΘΗΜΑΤΟΣ"
                  description="Here's some help text"
                  type="text"
                /> 
                
                </CCol>
              
                <CCol>
               
                <CInput
                  label="ΕΞΑΜΗΝΟ ΣΠΟΥΔΩΝ "
                  description="Here's some help text"
                  type="text"
                /> 
                </CCol>
               
                </CRow>

                <CInput
                  label="ΤΙΤΛΟΣ ΜΑΘΗΜΑΤΟΣ"
                  description="Here's some help text"
                  type="text"
                /> 
           
                <CRow>
                

               
                <CCol :col="12 - 4">
                  <strong>ΑΥΤΟΤΕΛΕΙΣ ΔΙΔΑΚΤΙΚΕΣ ΔΡΑΣΤΗΡΙΟΤΗΤΕΣ</strong>
                   <p>Σε περίπτωση που οι πιστωτικές μονάδες απονέμονται σε διακριτά μέρη του μαθήματος π.χ. Διαλέξεις, Εργαστηριακές Ασκήσεις κ.λπ. Αν οι πιστωτικές μονάδες απονέμονται ενιαία για το σύνολο του μαθήματος αναγράψτε τις εβδομαδιαίες ώρες διδασκαλίας και το σύνολο των πιστωτικών μονάδων</p>
                   
                    
                   <div
                    v-for="(input, index) in addfield"
                    :key="`phoneInput-${index}`"
                    class="input wrapper flex items-center"
                   >
                 <CInput
                 v-model="input.phone"
                  type="text"
                    description="Προσθέστε σειρές αν χρειαστεί. Η οργάνωση διδασκαλίας και οι διδακτικές μέθοδοι που χρησιμοποιούνται περιγράφονται αναλυτικά στο (δ)."
                />  
                <CButton   class="d-sm-down-none" color="success" @click="addField(input, addfield)" > <CIcon name="cil-pencil"/></CButton>
                <CButton    color="warning" @click="removeField(index, addfield)" >Remove</CButton>
                </div>
               <br>
                </CCol>
                
                </CRow>
                
                <CRow>
                <CCol  md="4">
                <CInput
                  label="ΕΒΔΟΜΑΔΙΑΙΕΣ ΩΡΕΣ ΔΙΔΑΣΚΑΛΙΑΣ"
                  description="Here's some help text"
                  type="text"
                /> 
                </CCol>
             
                <CCol  sm="6" md="2">
                <CInput
                  label="ΠΙΣΤΩΤΙΚΕΣ ΜΟΝΑΔΕΣ"
                  description="Here's some help text"
                  type="text"
                /> 
                </CCol>
                </CRow>
              <div>
                 <strong>ΠΙΣΤΩΤΙΚΕΣ ΜΟΝΑΔΕΣ</strong>
                   <p>γενικού υποβάθρου, 
                      ειδικού υποβάθρου, ειδίκευσης, 
                      γενικών γνώσεων, ανάπτυξης δεξιοτήτων
                    </p>
                <CInput
                  description="Here's some help text"
                  type="text"
                /> 
              </div>
                <CInput
                  label="ΠΡΟΑΠΑΙΤΟΥΜΕΝΑ ΜΑΘΗΜΑΤΑ:"
                  description="Here's some help text"
                  type="text"
                /> 
                 <CInput
                  label="ΓΛΩΣΣΑ ΔΙΔΑΣΚΑΛΙΑΣ και ΕΞΕΤΑΣΕΩΝ:	"
                  description="Here's some help text"
                  type="text"
                /> 

           
  
             <p>ΤΟ ΜΑΘΗΜΑ ΠΡΟΣΦΕΡΕΤΑΙ ΣΕ ΦΟΙΤΗΤΕΣ ERASMUS : </p>
                 <CSwitch class="mx-1" color="success" checked variant="3d" />
                 
                <CInput
                  label="ΗΛΕΚΤΡΟΝΙΚΗ ΣΕΛΙΔΑ ΜΑΘΗΜΑΤΟΣ (URL)"
                  description="Here's some help text"
                  type="text"
                /> 


              </CCardBody>
            
          </CCard>
        
      </CCol>
    </CRow>
    
  <CRow>
      <CCol lg="12">
       
          <CCard >
            <CCardHeader>
              <CIcon name="cil-pencil"/> (2)	ΜΑΘΗΣΙΑΚΑ ΑΠΟΤΕΛΕΣΜΑΤΑ

            </CCardHeader>
           
              <CCardBody>
                <strong>Μαθησιακά Αποτελέσματα</strong>
                <p>Περιγράφονται τα μαθησιακά αποτελέσματα του μαθήματος οι συγκεκριμένες  γνώσεις, δεξιότητες και ικανότητες καταλλήλου επιπέδου που θα αποκτήσουν οι φοιτητές μετά την επιτυχή ολοκλήρωση του μαθήματος.</p>
                    <li>  Συμβουλευτείτε το Παράρτημα Α </li>
                    <li>	Περιγραφή του Επιπέδου των Μαθησιακών Αποτελεσμάτων για κάθε ένα κύκλο σπουδών σύμφωνα με το Πλαίσιο Προσόντων του Ευρωπαϊκού Χώρου Ανώτατης Εκπαίδευσης</li>
                    <li>  Περιγραφικοί Δείκτες Επιπέδων 6, 7 & 8 του Ευρωπαϊκού Πλαισίου Προσόντων Διά Βίου Μάθησης και το Παράρτημα Β</li>
                    <li>  Περιληπτικός Οδηγός συγγραφής Μαθησιακών Αποτελεσμάτων</li>
               <CTextarea
               
                placeholder="Content..."
                horizontal
                rows="5"
              />
              </CCardBody>
               <CCardBody>
                <strong>Γενικές Ικανότητες</strong>
                <p>Λαμβάνοντας υπόψη τις γενικές ικανότητες που πρέπει να έχει αποκτήσει ο πτυχιούχος (όπως αυτές αναγράφονται στο Παράρτημα Διπλώματος και παρατίθενται ακολούθως) σε ποια / ποιες από αυτές αποσκοπεί το μάθημα;.
              
                  <table>  
                    <ol> 
                    <th>
                   <li>Αναζήτηση, ανάλυση και σύνθεση δεδομένων και πληροφοριών, με τη χρήση και των απαραίτητων τεχνολογιών </li>
                   <li> Προσαρμογή σε νέες καταστάσεις </li>
                   <li> Λήψη αποφάσεων </li>
                   <li> Αυτόνομη εργασία </li>
                   <li> Ομαδική εργασία </li>
                   <li> Εργασία σε διεθνές περιβάλλον </li>
                   <li>  Εργασία σε διεπιστημονικό περιβάλλον </li>
                   </th>
                    <th>
                   <li> Παράγωγή νέων ερευνητικών ιδεών </li>
                   <li>	Σχεδιασμός και διαχείριση έργων </li>
                   <li> Σεβασμός στη διαφορετικότητα και στην πολυπολιτισμικότητα </li>
                   <li> Σεβασμός στο φυσικό περιβάλλον </li>
                   <li> Επίδειξη κοινωνικής, επαγγελματικής και ηθικής υπευθυνότητας και ευαισθησίας σε θέματα φύλου </li>
                   <li> Άσκηση κριτικής και αυτοκριτικής </li>
                   <li> Προαγωγή της ελεύθερης, δημιουργικής και επαγωγικής σκέψης</li>
                    </th>
                    ……
                    Άλλες
                    ……</ol>
                  </table>
                
                </p>
               <CTextarea
               
                placeholder="Content..."
                horizontal
                rows="5"
              />
               </CCardBody>
          </CCard>
      </CCol>
  </CRow>
      
      <CRow>
      <CCol lg="12">
       
          <CCard >
            <CCardHeader>
              <CIcon name="cil-pencil"/> (3)	ΠΕΡΙΕΧΟΜΕΝΟ ΜΑΘΗΜΑΤΟΣ

            </CCardHeader>
           
              <CCardBody>

             
               <CTextarea
               
                placeholder="Content..."
                horizontal
                rows="5"
              />
              </CCardBody>
          </CCard>
      </CCol>
      </CRow>

  <CRow>
      <CCol lg="12">
       
          <CCard >
            <CCardHeader>
              <CIcon name="cil-pencil"/> (4)	ΔΙΔΑΚΤΙΚΕΣ KAI ΜΑΘΗΣΙΑΚΕΣ ΜΕΘΟΔΟΙ - ΑΞΙΟΛΟΓΗΣΗ

            </CCardHeader>
           
              <CCardBody>
                 <CTextarea
                label=" ΤΡΟΠΟΣ ΠΑΡΑΔΟΣΗΣ (Πρόσωπο με πρόσωπο, Εξ αποστάσεως εκπαίδευση κ.λπ)"
                placeholder="Content..."
                horizontal
                rows="5"
              />
                <CTextarea
                label="ΧΡΗΣΗ ΤΕΧΝΟΛΟΓΙΩΝ ΠΛΗΡΟΦΟΡΙΑΣ ΚΑΙ ΕΠΙΚΟΙΝΩΝΙΩΝ
                      (Χρήση Τ.Π.Ε. στη Διδασκαλία, στην Εργαστηριακή Εκπαίδευση, στην Επικοινωνία με τους φοιτητές	)"
                placeholder="Content..."
                horizontal
                rows="5"
              />

              
              <CCard>
                 <CCardHeader>
               <p>ΟΡΓΑΝΩΣΗ ΔΙΔΑΣΚΑΛΙΑΣ<br>
                Περιγράφονται αναλυτικά ο τρόπος και μέθοδοι διδασκαλίας.<br>
                Διαλέξεις, Σεμινάρια, Εργαστηριακή Άσκηση, Άσκηση Πεδίου, Μελέτη & ανάλυση βιβλιογραφίας, Φροντιστήριο, Πρακτική (Τοποθέτηση), <br>
                Κλινική Άσκηση, Καλλιτεχνικό Εργαστήριο, <br>
                Διαδραστική διδασκαλία, Εκπαιδευτικές επισκέψεις, Εκπόνηση μελέτης (project), Συγγραφή εργασίας / εργασιών, <br>
                Καλλιτεχνική δημιουργία, κ.λπ.<br>
               Αναγράφονται οι ώρες μελέτης του φοιτητή για κάθε μαθησιακή δραστηριότητα καθώς και οι ώρες μη καθοδηγούμενης μελέτης σύμφωνα <br>
               με τις αρχές του ECTS	Δραστηριότητα	Φόρτος <br>
               Εργασίας Εξαμήνου<br>
               Σύνολο Μαθήματος <br>
               </p>	
            </CCardHeader>
                <CCardBody>
                <table border=1>
                  <div
                    v-for="(input2, index2) in addfield2"
                    :key="`phoneInput-${index2}`"
                    class="input wrapper flex items-center"
                   >

                <tr>
                <th>
                Δραστηριότητα</th> <th>
                Φόρτος Εργασίας Εξαμήνου</th>
        <tr>
                <tr>
                <th>
                 
                 <CInput
                 v-model="input2.phone2"
                  type="text"
                   
                />  
               
                </th>
                <th>
                <CInput
                 v-model="input2.phone3"
                  type="text"
                   
                />  
                </th>
                </tr>
                 <CButton   class="d-sm-down-none" color="success" @click="addField(input2, addfield2)" > <CIcon name="cil-pencil"/></CButton>
                <CButton    color="warning" @click="removeField(index2, addfield2)" >Remove</CButton>
              
               </div>
                </table>
                </CCardBody>
              </CCard>
               <p v-html="parsedBody"></p>
              
              <CTextarea              
                placeholder="Content..." 
                rows="5"
              />


 </CCardBody>
          </CCard>
      </CCol>
      </CRow>

 <CRow>
      <CCol lg="12">
       
          <CCard >
            <CCardHeader>
              <CIcon name="cil-pencil"/> (5)	ΣΥΝΙΣΤΩΜΕΝΗ-ΒΙΒΛΙΟΓΡΑΦΙΑ

            </CCardHeader>
           
              <CCardBody>
              <CTextarea              
                placeholder=" - Προτεινόμενη Βιβλιογραφία:
- Συναφή επιστημονικά περιοδικά:" 
                rows="5"
              />

              </CCardBody>
          </CCard>
      </CCol>
 </CRow>
            



</div>
</template>

<script>

//import axios from'axios';
export default {
 
   name: 'Perigramma',
  data() {
    return {
     addfield:[{phone:""}],
     addfield2:[{phone2:"",phone3:""}],
      textBody: "ΑΞΙΟΛΟΓΗΣΗ ΦΟΙΤΗΤΩΝ \nΠεριγραφή της διαδικασίας αξιολόγησηςΓλώσσα Αξιολόγησης, Μέθοδοι αξιολόγησης, Διαμορφωτική  ή Συμπερασματική, Δοκιμασία Πολλαπλής Επιλογής,\nΕρωτήσεις Σύντομης Απάντησης, Ερωτήσεις Ανάπτυξης Δοκιμίων, Επίλυση Προβλημάτων, Γραπτή Εργασία, Έκθεση / Αναφορά, Προφορική Εξέταση, Δημόσια Παρουσίαση, Εργαστηριακή Εργασία, \nΚλινική Εξέταση Ασθενούς, Καλλιτεχνική Ερμηνεία, Άλλη / Άλλες\nΑναφέρονται ρητά προσδιορισμένα κριτήρια αξιολόγησης και εάν και που είναι προσβάσιμα από τους φοιτητές."
     };
  },
  computed:{
    parsedBody(){
      return this.textBody.replace(/\n/g,"<br>")
    }
  },
  
methods :{
    
 addField(value, fieldType) {
      fieldType.push({ value: "" });
    },
    removeField(index, fieldType) {
       fieldType.splice(index, 1);
    },
 
},
mounted(){
 
},

}

</script>

