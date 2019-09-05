function validate() {
    var index_name,index_message
    var n1 = document.getElementById("name");
    var m1 = document.getElementById("message");
    for(index_name=0;index_name<n1.value.length;++index_name){
        for(index_message=0;index_message<m1.value.length;++index_message){
            if(n1[index_name].value.length >3) {
                if(m1[index_message].value.length >19) {
                    return true;
                }
            }
        }
    }
    alert("Name should be at least 4 characters, and message should be at least 20 characters");
    return false;
}
