let database = firebase.database();
let SDR = {
    id: 01,
    nome: "Daniel Carlos Chaves Boll",
    email: "danielboll.academico@gmail.com",
    leads: {
        01: {
            nome: "Mateus Edival",
            celular: "45999999999",
            email: "yagmomru@gmail.com"
        },
        02: {
            nome: "Anyone Else",
            celular: "45999999999",
            email: "sruoyon@gmail.com"
        }
    }
}
firebase.database().ref('SDR/'+SDR.id).set({
    nome: SDR.nome,
    email: SDR.email
});

for(let i=1; i<3; i++){
    firebase.database().ref('SDR/'+SDR.id+'/leads/'+ i).set({
        nome: SDR.leads[i].nome,
        celular: SDR.leads[i].celular,
        email: SDR.leads[i].email
    });
}