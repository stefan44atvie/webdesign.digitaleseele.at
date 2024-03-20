var front = document.getElementsByClassName("tag");
  for(i=0;i<=front.length;i++){
    if(front[i].innerHTML == "Fullstack"){
      front[i].style.backgroundColor="blue";
      front[i].style.color="white";
    }else if(front[i].innerHTML == "AddOn"){
      front[i].style.backgroundColor="yellow";
      front[i].style.color="black";
    }else if(front[i].innerHTML == "Frontend"){
        front[i].style.backgroundColor="red";
        front[i].style.color="black";
      }
    else {
      front[i].style.backgroundColor="green";
    }

  }