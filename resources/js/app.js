import './bootstrap';

// Estraggo la funzione creatAppa dall'oggetto Vue
const {createApp} = Vue;

// Creo l'istanza di Vue da montare in pagina
createApp ({
    data() {
        return {
            message: 'Welcome Laravel from JS',
        };
    }
    // Monto l'istanza di Vue in pagina
}).mount('#app');