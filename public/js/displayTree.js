var arrayTree = "", id_p = [], current_id = 0, current_id1 = 0, f = 0, i = 0, selectI;
function tree(){
    var k = 0, t = 0;
    $.ajax({
        type: "GET",
        url: "http://localhost:8000/api/allnodes",
        success: function (data) {
            if(data != ""){
                $.each(data, function (k, n){
                    /*$.ajax({
                        async: false,
                        type: "GET",
                        url: "http://localhost:8000/api/findNodeId/"+n.id,
                        success: function (data) {
                            id.push(data);
                        }
                    });
                    d += "<li>" + n.name + "</li>";
                    if(n.root == 1){
                        if(n.id_subordinate != null){
                           d += "<li>"+ n.name + 
                           "<ul>";
                        }
                    }*/
                    id_p.push(n.id);
                });
                arrayTree += "<ul>";
                $.each(data, function (k, n){
                    current_id = n.id;
                    if(n.root == 1 && n.subordinate == 0){
                        arrayTree += "<li>" + n.name +"</li>";
                    }else if(n.root == 1 && n.subordinate == 1 && n.id_precedent == null){
                        arrayTree += "<li>" + n.name +"<ul>";
                        var p = 0;
                        $.each(data, function (p, m){
                            //alert(current_id +" "+ m.id);
                            if(current_id == m.id_precedent)
                                arrayTree += "<li>"+ m.name +"</li>";
                        });
                        arrayTree += "</ul></li>";
                    }else if(n.root == 0 && n.subordinate == 1){
                        arrayTree += "<li>" + n.name +"<ul>";
                        var p = 0;
                        $.each(data, function (p, m){
                            //alert(current_id +" "+ m.id);
                            if(current_id == m.id_precedent)
                                arrayTree += "<li>"+ m.name +"</li>";
                        });
                        arrayTree += "</ul></li>";
                    }

                    /*current_id = n.id_precedent;
                    //alert(current_id);
                    if(n.subordinate == 1){
                        arrayTree += "<li>" + n.name;
                        for(var i = 0; i<id_p.length; i++){
                            if(current_id == id_p[i]){
                                current_id1 = id_p[i];
                            }
                            if(current_id == current_id1){
                                arrayTree += "<li>" + n.name +"</li>";
                            }
                        }
                        //arrayTree += "<li>" + n.name +"</li>";
                        f = 1;  
                    }*/
                });
                arrayTree += "</ul>";
                $('#jstree').append(arrayTree);
                $('#jstree').jstree(); 
            }else{
                $("#jstree").html("Drzewo jest puste.");
            }
        }
    });
    $.ajax({
        type: "GET",
        url: "http://localhost:8000/api/allnodes",
        success: function (data) {
            selectI += '<option value="">Brak rodzica</option>';
            if(data != ""){
                $.each(data, function (k, n){
                    selectI += "<option value='"+ n.id + "'>" + n.name + "</option>"; 
                });
                $("#precedent").append(selectI);
            }
        }   
    });
}
var id;
function del(name){
    $.ajax({
        type: "GET",
        url: "http://localhost:8000/api/allnodes",
        success: function (data) {
            if(data != ""){
                $.each(data, function (k, n){
                    if(n.name == name){
                        id = n.id;
                        $.ajax({
                            type: "DELETE",
                            url: "http://localhost:8000/api/nodes/delete/"+id,
                            success: function (result) {
                                window.location.reload(true);
                            }   
                        });
                    }
                });
            }
        }   
    });
}