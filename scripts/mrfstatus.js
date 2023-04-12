import { initializeApp } from 'https://www.gstatic.com/firebasejs/9.18.0/firebase-app.js';

const firebaseConfig = {
  apiKey: 'AIzaSyDZWlJStbNfIHqQzAm9cb0FDRKALqyBN24',
  authDomain: 'republik-junk.firebaseapp.com',
  databaseURL: 'https://republik-junk-default-rtdb.firebaseio.com',
  projectId: 'republik-junk',
  storageBucket: 'republik-junk.appspot.com',
  messagingSenderId: '724447868451',
  appId: '1:724447868451:web:b151bb43df4f144ee4e396',
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);

import {
  getDatabase,
  ref,
  onValue,
} from 'https://www.gstatic.com/firebasejs/9.18.0/firebase-database.js';

const db = getDatabase();

onValue(ref(db, 'MRF/'), (snapshot) => {
  let date = snapshot.val().Date;
  const currDate = document.querySelectorAll('.dateDetect');

  for (let i = 0; i < currDate.length; i++) {
    const element = currDate[i];
    element.innerHTML = '<p>' + date + '</p>';
  }
});

for (let i = 1; i <= 4; i++) {
  onValue(ref(db, `MRF/MRF${i}/`), (snapshot) => {
    let stat = snapshot.val().Status;
    document.querySelector(`.status${i}`).innerHTML = '<p>' + stat + '</p>';
  });
}
/*
onValue(ref(db, 'MRF/MRF1/'), (snapshot) => {
  //let confScore = snapshot.val().ConfidenceScore;
  let stat = snapshot.val().Status;

  document.querySelector('.status1').innerHTML = '<p>' + stat + '</p>';
});
// status for mrf 2
onValue(ref(db, 'MRF/MRF2/'), (snapshot) => {
  //let confScore = snapshot.val().ConfidenceScore;
  let stat = snapshot.val().Status;
  document.querySelector('.status2').innerHTML = '<p>' + stat + '</p>';
});
// status for mrf 3
onValue(ref(db, 'MRF/MRF3/'), (snapshot) => {
  //let confScore = snapshot.val().ConfidenceScore;
  let stat = snapshot.val().Status;

  document.querySelector('.status3').innerHTML = '<p>' + stat + '</p>';
});
// status for mrf 4
onValue(ref(db, 'MRF/MRF4/'), (snapshot) => {
  //let confScore = snapshot.val().ConfidenceScore;
  let stat = snapshot.val().Status;
  document.querySelector('.status4').innerHTML = '<p>' + stat + '</p>';
});
*/
