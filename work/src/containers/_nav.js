export default [
  {
    
    _name: 'CSidebarNav',
   

    _children: [
       
      {
        _name: 'CSidebarNavTitle',
        _children: ['Dashboard'] ,
       
      },
     
      {
        _name: 'CSidebarNavItem',
        name: 'Dashboard',
        to: '/dashboard',
        icon: 'cil-calculator',
        badge: {
          color: 'primary',
          text: '1o', 
        }
      },
      
      {
        _name: 'CSidebarNavTitle',
        _children: ['Theme']
      },
      
      {
        _name: 'CSidebarNavItem',
        name: 'Test ',
        to: '/test',
        icon: 'cil-calculator',
        badge: {
          color: 'primary',
          text: 'NEW',
          shape: 'pill'
        }
      },
      
      {
        _name: 'CSidebarNavItem',
        name: 'Form',
        to: '/form',
        icon: 'cil-calculator',
        badge: {
          color: 'primary',
          text: 'NEW',
          shape: 'pill'
        }
      },
      {
        _name: 'CSidebarNavItem',
        name: 'MOaksiologisi',
        to: '/MOAksiologisis',
        icon: 'cil-calculator',
        badge: {
          color: 'primary',
          text: 'NEW',
          shape: 'pill'
        }
      },
         
     
     
      {
        _name: 'CSidebarNavDropdown',
        name: 'ΒΙΟΓΡΑΦΙΚΑ ΣΤΟΙΧΕΙΑ',
        to: '/BIOGRAFIKAST',
        icon: 'cil-calculator',
       
        
        route: '',
        
        items: [
          
          {
            name: 'ΒΙΟΓΡΑΦΙΚΑ ΣΤΟΙΧΕΙΑ',
            
            to: '/BIOGRAFIKAST',
            
          },
          {
            name: 'Εκπαίδευση',
            to: '/EKPAIDEYSI'
          },
          {
            
            name: 'Διδασκαλία',
            to: '/dashboard'
          },
          {
            name: 'Συμμετοχή στην επίβλεψη πρυχιακών Μεταπτυχιακών Διδακτωρικών διατριβών',
            length:3,
            to: '/dashboard'
            
          },
          {
            name: 'Συμμετοχή σε ερευνητικά προγράμματα',
            to: '/dashboard'
          },
          {
            name: 'Επιστημονικές επιτροπές-συνεργασίες',
            to: '/dashboard'
          },
          {
            name: 'Καινοτόμες δράσεις-διακρίσεις',
            to: '/dashboard'
          }
          
        
        ]
      },
      
      {
        _name: 'CSidebarNavDropdown',
        name: 'ΕΚΠΑΙΔΕΥΤΙΚΟ ΕΡΓΟ',
        to: '/ProptixiakaMath',
        icon: 'cil-calculator',
       
        
        route: '',
        
        items: [
          
          {
            name: 'Προπτυχιακά Μαθήματα',
            to: '/ProptixiakaMath',
            
          },
          {
            name: 'Περίγραμμα Μαθήματος',
            to: '/PerigrammaMath',
            
          },
          {
            name: 'Μεταπτυχιακά Μαθήματα',
            to: '/EKPAIDEYSI'
          },
          {
            name: 'Διαχείρηση Απογραφικών Μαθημάτων',
            to: '/dashboard'
          },
         
          
        
        ]
      },

    ]
  }
]