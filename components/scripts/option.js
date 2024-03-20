var option = document.getElementsByClassName("option");
  for(i=0;i<=option.length;i++){
    if(option[i].innerHTML == "ja"){
      option[i].innerHTML="✅ ";
    }else {
        option[i].innerHTML="⛔️";
    }

  }