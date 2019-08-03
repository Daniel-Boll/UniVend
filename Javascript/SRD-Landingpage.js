function request() {
    let database = firebase.database();
    let table = document.getElementById("consultatable");
    
    firebase.database().ref('/SDR').on('value', function(snapshot) {
		snapshot.forEach(function(item){
            for(let i=1; i<3; i++){
                let leads = item.val().leads[i];
                console.table(leads);
                let tr = document.createElement("tr");

                // Nome
                let td_nome = document.createElement("td");
                td_nome.id = "td_nome";
                let nome = document.createTextNode(leads.nome);
                td_nome.appendChild(nome);
                tr.appendChild(td_nome);
                table.appendChild(tr);

                let td_email = document.createElement("td");
                td_email.id = "td_email";
                let email = document.createTextNode(leads.email);
                td_email.appendChild(email);
                tr.appendChild(td_email);
                table.appendChild(tr);

                // Celular
                let td_celular = document.createElement("td");
                td_celular.id = "td_celular";
                let celular = document.createTextNode(leads.celular);
                td_celular.appendChild(celular);
                tr.appendChild(td_celular);
                table.appendChild(tr);

                // Requisito
                let td_requisito = document.createElement("td");
                td_requisito.id = "td_requisito";
                let requisito = document.createTextNode("Nada");
                td_requisito.appendChild(requisito);
                tr.appendChild(td_requisito);
                table.appendChild(tr);

                // Add
                let td_add = document.createElement("td");
                td_add.id = "td_add";
                let anc = document.createElement("a");
                anc.href = "./passos.html";
                anc.class = "modal-trigger";
                let im = document.createElement("i");
                im.class = "material-icons";
                im.innerHTML = "¿analisar?";
                anc.appendChild(im);
                td_add.appendChild(anc);
                tr.appendChild(td_add);
                table.appendChild(tr);

                // <td><a href="#moda6" class="modal-trigger"><i class="material-icons">add</i></a></td>
            }
        });
    });
}