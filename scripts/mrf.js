import { initializeApp } from "https://www.gstatic.com/firebasejs/9.18.0/firebase-app.js";
        const firebaseConfig = {
            apiKey: "AIzaSyDZWlJStbNfIHqQzAm9cb0FDRKALqyBN24",
            authDomain: "republik-junk.firebaseapp.com",
            databaseURL: "https://republik-junk-default-rtdb.firebaseio.com",
            projectId: "republik-junk",
            storageBucket: "republik-junk.appspot.com",
            messagingSenderId: "724447868451",
            appId: "1:724447868451:web:b151bb43df4f144ee4e396"
        };


        import { getStorage, ref, getDownloadURL } from "https://www.gstatic.com/firebasejs/9.18.0/firebase-storage.js";
        const app = initializeApp(firebaseConfig);
        const storage = getStorage();

        function refreshImage() {

        getDownloadURL(ref(storage, 'mrf0.jpg'))
            .then((url) => {
                // This can be downloaded directly:
                const xhr = new XMLHttpRequest();
                xhr.responseType = 'blob';
                xhr.onload = (event) => {
                    const blob = xhr.response;
                };
                xhr.open('GET', url);
                xhr.send();
                // Or inserted into an <img> element
                const img = document.getElementById('mrf');
                img.setAttribute('src', url);
            })
            .catch((error) => {
                // Handle any errors
            });
        getDownloadURL(ref(storage, 'mrf1.jpg'))
            .then((url) => {
                // This can be downloaded directly:
                const xhr = new XMLHttpRequest();
                xhr.responseType = 'blob';
                xhr.onload = (event) => {
                    const blob = xhr.response;
                };
                xhr.open('GET', url);
                xhr.send();
                // Or inserted into an <img> element
                const img = document.getElementById('mrf1');
                img.setAttribute('src', url);
            })
            .catch((error) => {
                // Handle any errors
            });
        getDownloadURL(ref(storage, 'mrf2.jpg'))
            .then((url) => {
                // This can be downloaded directly:
                const xhr = new XMLHttpRequest();
                xhr.responseType = 'blob';
                xhr.onload = (event) => {
                    const blob = xhr.response;
                };
                xhr.open('GET', url);
                xhr.send();
                // Or inserted into an <img> element
                const img = document.getElementById('mrf2');
                img.setAttribute('src', url);
            })
            .catch((error) => {
                // Handle any errors
            });
        getDownloadURL(ref(storage, 'mrf3.jpg'))
            .then((url) => {
                // This can be downloaded directly:
                const xhr = new XMLHttpRequest();
                xhr.responseType = 'blob';
                xhr.onload = (event) => {
                    const blob = xhr.response;
                };
                xhr.open('GET', url);
                xhr.send();
                // Or inserted into an <img> element
                const img = document.getElementById('mrf3');
                img.setAttribute('src', url);
            })
            .catch((error) => {
                // Handle any errors
            });
        }
        refreshImage();
        setInterval(refreshImage, 5000);