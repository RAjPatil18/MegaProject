function addnewWorkField() {
    let newNode=document.createElement("textarea");
    newNode.classList.add("form-control");
    newNode.classList.add("wefield");
    newNode.classList.add("mt-2");
    newNode.setAttribute("rows",3);
    newNode.setAttribute("placeholder","Work Experience");

    let divtag=document.createElement("div");
    

    let removebutton=document.createElement("button");
    removebutton.classList.add("btn");
    removebutton.classList.add("btn-danger");
    removebutton.classList.add("float-right");
    removebutton.classList.add("my-2");
    removebutton.classList.add('removeButton');
    // removebutton.setAttribute('onclick','removeElement()')

    removebutton.onclick=function(){
        removeProject(this);
    };



    var text = document.createTextNode("Remove");
                 
    // appending text to button
    removebutton.appendChild(text);
     
    // appending button to div
    // myDiv.appendChild(button); ;
    divtag.appendChild(newNode);
    divtag.appendChild(removebutton);

    let insertin=document.getElementById("woekexp");
    let before=document.getElementById("addworkbuttondiv");

    insertin.insertBefore(divtag,before);

    // insertin.insertBefore(removebutton,before);

    
    const buttons = document.querySelectorAll('.btn-danger');

    buttons.forEach(button => {
    button.style.float="right";
    });


//   buttons.forEach(button=>{

//   });

}

function addprojectField(){
    let divtag=document.createElement("div");
    divtag.classList.add("projectsDetails");

    let inputtag=document.createElement("INPUT");
    inputtag.classList.add("form-control");
    inputtag.classList.add("titleOfProjects");
    inputtag.classList.add("my-2");
    inputtag.setAttribute('placeholder','Title Of Project');

    let texttag=document.createElement("textarea");
    texttag.classList.add("form-control");
    texttag.classList.add("projectfield");
    texttag.setAttribute("rows",3);
    texttag.setAttribute("placeholder","Project Description");

    divtag.appendChild(inputtag);
    divtag.appendChild(texttag);


    let insertin=document.getElementById("projects");
    let before=document.getElementById("addprojectbuttondiv");

    


    let removebutton=document.createElement("button");
    removebutton.classList.add("btn");
    removebutton.classList.add("btn-danger");
    removebutton.classList.add("float-right");
    removebutton.classList.add("my-2");
    removebutton.classList.add('removeButton');
    // removebutton.setAttribute('onclick','removeElement()')

    removebutton.onclick=function(){
        removeProject(this);
    };


    var text = document.createTextNode("Remove");
                 
    // appending text to button
    removebutton.appendChild(text);

    divtag.appendChild(removebutton);

    insertin.insertBefore(divtag,before);

    // insertin.insertBefore(removebutton,before);

    const buttons = document.querySelectorAll('.btn-danger');

    buttons.forEach(button => {
    button.style.float="right";
    });





}

function removeProject(e){
    e.parentNode.remove();
}

function addAcademicField(){
    let newNode=document.createElement("textarea");
    newNode.classList.add("form-control");
    newNode.classList.add("academicfield");
    newNode.classList.add("mt-2");
    newNode.setAttribute("rows",3);
    newNode.setAttribute("placeholder","Qualification");

    let divtag=document.createElement("div");

    let removebutton=document.createElement("button");
    removebutton.classList.add("btn");
    removebutton.classList.add("btn-danger");
    removebutton.classList.add("float-right");
    removebutton.classList.add("my-2");
    removebutton.classList.add('removeButton');
    removebutton.onclick=function(){
        removeProject(this);
    };

    var text = document.createTextNode("Remove");
                 
    // appending text to button
    removebutton.appendChild(text);

    divtag.appendChild(newNode);
    divtag.appendChild(removebutton);

    let insertin=document.getElementById("academics");
    let before=document.getElementById("addacademicbuttondiv");

    insertin.insertBefore(divtag,before);

    // insertin.insertBefore(removebutton,before);

    
    const buttons = document.querySelectorAll('.btn-danger');

    buttons.forEach(button => {
    button.style.float="right";
    });
}


// function generateResume(){

//     let namefield=document.getElementById('nameField').value;
//     console.log(namefield);
//     document.getElementById('Tname1').innerHTML=namefield;
//     document.getElementById('Tname2').innerHTML=namefield;

//     let confield=document.getElementById('contactField').value;
//     document.getElementById('Tcontact').innerHTML=confield;

//     let addfield=document.getElementById('addressField').value;
//     document.getElementById('Taddress').innerHTML=addfield;

//     let profile=document.getElementById('profileField').files[0];
//     console.log(profile);
//     if(profile!=null){

//     let reader=new FileReader();

//     reader.readAsDataURL(profile);

//     reader.onloadend= function(){
//         document.getElementById('Tprofile').src=reader.result;
//     };

//     }
    

//     let linkedinfield=document.getElementById('linkedinField').value;
//     document.getElementById('Tlinkedin').innerHTML=linkedinfield;

//     let githubfield=document.getElementById('gitField').value;
//     document.getElementById('Tgithub').innerHTML=githubfield;

//     let objfield=document.getElementById('objfield').value;
//     document.getElementById('Tobj').innerHTML=objfield;


//     let works=document.getElementsByClassName('wefield');
//     let work_str="";
//     for(let ele of works){
//         work_str=work_str+`<li>${ele.value}</li>`;
//     }
//     document.getElementById('Twork').innerHTML=work_str;

//     let academics=document.getElementsByClassName('academicfield');
//     let academic_str="";
//     for(let ele of academics){
//         academic_str=academic_str+`<li>${ele.value}</li>`;
//     }
//     document.getElementById('Tqualification').innerHTML=academic_str;



//     document.getElementById('resume-form').style.display="none";
//     document.getElementById('resume-template').style.display="block";
   


// }

function generateResume(){

    document.getElementById('resume-form').style.display="none";
    document.getElementById('resume-template').style.display="block";

}

function printResume(){
    const resume=document.getElementById("Ourresume");

    var opt = {
        margin:       1,
        filename:     'myfile.pdf',
        image:        { type: 'jpeg', quality: 0.98 },
        html2canvas:  { scale: 1 },
        jsPDF:        { unit: 'in', format: 'letter', orientation: 'portrait' }
      };

    html2pdf().from(resume).set(opt).save();
}
