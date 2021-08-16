var g_flag = false;
function viewOutput(e){
  var op = e.value;
  get("op").innerHTML = op;
}
function hideinfo(){
  get("info").style.display= "none";
}
function showinfo(){
  get("info").style.display= "block";
}
function turnOn(){
  var buld_i = get("bulb");
  buld_i.src = "BulbOn.png";
}
function turnOff(){
  var buld_i = get("bulb");
  buld_i.src = "MicrosoftTeams-image (3).png";
}
function get(id){
  return document.getElementById(id);
}
function viewGoogle()
{
  var g_f = get("g_form");
  var btn_g = get("btn_g");
  if(g_flag){
    g_f.style.display="none";
    btn_g.innerHTML = "Login with Google";
    g_flag = false;
  }else {
    g_f.style.display="block";
    btn_g.innerHTML = "Hide with Google";
    g_flag = true;
  }
}
