let pam = [];
let pan = [];

window.onload = function(){
let revealMenu = document.querySelector('.save-art__controller1');
let menuContainer = document.querySelector('.save-art__right-container');
let drawPan = document.querySelector('.save-art__left');
const formForm = document.querySelector('.save-article__form');
const submitBtnFrm = document.querySelector('.save-art__right-bottom__submit');
const formContent = document.querySelector('.save-art__left');
let counter1 = 0; //counter for subinput elmnt to differentiate each of them

// start -- reveal menu for small display
if(revealMenu !== null){
revealMenu.addEventListener('click',function(){
    menuContainer.classList.add('actif');
})
}
menuContainer.addEventListener('click', function(){
    menuContainer.classList.remove('actif');
});
//end -- reveal menu for small display


let createSubTitle = document.querySelector('.ctr__sub-title');
let createParagraphe = document.querySelector('.ctr__paragraphe');
let createSimpleImg = document.querySelector('.ctr__simple-image');


//attach controller on input container

const attachController = (type)=>{
    let item2 = document.createElement('div');
    item2.className = 'input_item-container-controller';
    //controlleur remove to remove input item
    let removeBtn = document.createElement('span');
    removeBtn.className = 'input_item-container-remove-btn input-unit_controller-item';
    removeBtn.appendChild(document.createTextNode('remove'));

    item2.appendChild(removeBtn);

    if(type === 'paragraph' || type === 'subtitle'){

    let getselectBtn = document.createElement('button');
    getselectBtn.className = 'input-unit-get_selection input-unit_controller-item';
    getselectBtn.appendChild(document.createTextNode('Get Selection'));
    item2.appendChild(getselectBtn);

    }
    return item2;
}

//create the container that will contain the input unit and its controlleur
const Itemcontainer = (type)=>{
    let item0 = document.createElement('div');
    item0.className = 'input_item-container-container';

    let item1 = document.createElement('div');
    item1.className = 'input_item-container';

    item0.appendChild(item1);
    item0.appendChild(attachController(type));
    let item3 = document.createElement('div');
    item3.className = 'input_item-container-commandes';
    item0.appendChild(item3);

    return item0;
}

//create the input unit
const textInput = (obj)=>{

   
    let item2 = document.createElement(obj.element); //create the input element
    item2.type = obj.type;//set the input element type
    let countItem = drawPan.querySelectorAll('.'+obj.specClass)?.length;//count the number of element to set a different name to each input element by adding the name and the number
    countItem?item2.name = obj.name+countItem++:item2.name = obj.name;//set the name if there are not item yet use just the name otherwise add the name and the number
    item2.className = obj.simpleClass+' '+obj.specClass; //set the classname
    item2.setAttribute('id',item2.name);//set the id attribute
    item2.setAttribute('required','');

    labelItem = document.createElement('label');
    labelItem.setAttribute('for',item2.name);
    let textNode1 = document.createTextNode(obj.labelText);
    labelItem.appendChild(textNode1);


    return [item2,labelItem];
} 

//write the input container on the drawingpan
const writeContain = (obj)=>{
    drawPan.appendChild(Itemcontainer(obj.elementName));
    let op = textInput(obj);
    document.querySelector('.input_item-container-container:last-of-type .input_item-container').appendChild(op[1]);
    document.querySelector('.input_item-container-container:last-of-type .input_item-container').appendChild(op[0]);
    updateController();
}
//create the input unit using the object carring neccessary intel
createSubTitle.addEventListener('click', function(){

    writeContain({'type':'text','specClass':'input-text__sub-title',
                     'name':'inputText','simpleClass':'input-text',
                     'labelText':'enter sub title','element':'input',
                     'elementName':'subtitle',
     });
   
});

createParagraphe.addEventListener('click', ()=>{
       writeContain({'type':'text','specClass':'input-text__paragraphe',
                      'name':'paragrapheText','simpleClass':'input-text',
                      'labelText':'enter a paragraphe','element':'textarea',
                      'elementName':'paragraph',
                   });
                });

createSimpleImg.addEventListener('click', ()=>{
        writeContain({'type':'file','specClass':'input-text__simpleImage',
                        'name':'simpleImage','simpleClass':'input-text',
                        'labelText':'enter an image','element':'input',
                        'elementName':'simple-image',
                     });
                });


const form = document.querySelector('.save-article__form');
async function sendData(jsd) {
    const formDta = new FormData(form);

    const jsonDta = await JSON.stringify(pan);
    console.log(pan);
    console.log('jsd');
    console.log(jsd);
    console.log(jsonDta);
    console.log(JSON.parse(jsonDta));
    formDta.append('jsondata', jsonDta);
    
    try{
        const response = await 
    fetch('https://officetourisme-rdc.com/admin/ont_a_metadata',{
          method:'POST',
          body: formDta,
    });
    console.log(await response.json());
   }catch(e){
    console.error(e);
   }
}



//acquire the object context for the removal of button 
let removeInputItem = document.querySelectorAll('.input_item-container-remove-btn');
//acquire the object context for the getselected cotent button
let getSelectedContent = document.querySelectorAll('.input-unit-get_selection');

//update the object array for the remaining of the button on the drawing pan for the remove inputunit btn
//upadte the object array for the remaining of the button on the drawing pan for selectioncotent
const updateController = ()=>{
    removeInputItem = document.querySelectorAll('.input_item-container-remove-btn');
    getSelectedContent = document.querySelectorAll('.input-unit-get_selection');
    removeInputItem.forEach((n)=>{
        //register the event to remove inputunit
        n.addEventListener('click', (e)=>{
         console.log(e.target);
         let elementToRemove = e.target.parentElement.parentElement;
         if(elementToRemove.classList.contains('input_item-container-container')){
            drawPan.removeChild(elementToRemove);//remove the input unit
         }
         removeInputItem = document.querySelectorAll('.input_item-container-remove-btn');

         e.stopImmediatePropagation();
         e.preventDefault();
         
        });
    });

//add the get selection btn to add sub content (link quotte) to the input unit
    const addControlleur = (obj)=>{
        
         
          let getselectBtn = document.createElement('select');
          getselectBtn.className = 'input-unit-save_selection input-unit_controller-item';

          ['select an option','link','quotte','link-quotte',].forEach((x)=>{
              let option = document.createElement('option');
              option.text = x;
              option.value = x;
              getselectBtn.add(option);
          });

          getselectBtn.setAttribute('data-start', obj.start);
          getselectBtn.setAttribute('data-end', obj.end);
          getselectBtn.setAttribute('data-valuetext', obj.text);
          getselectBtn.addEventListener('change',saveCommande);//call to the save command to add commande for the http request about the subcontent
          obj.obj.target.parentElement.appendChild(getselectBtn);
          console.log(obj.target);
          obj.obj.target.disabled = true;

    }
//call to save sub commande input and data (spam, input div)
    const saveCommande = (e)=>{

        //e.target set selection type button

        let container1 = document.createElement('div');
        container1.className = 'save-commande-container';
    
        let item1 = document.createElement('spam');
        let selectedItemTarget = document.querySelector('.input-unit-save_selection');
        let selectedItem = selectedItemTarget.dataset.valuetext.substr(selectedItemTarget.dataset.start, 
                           selectedItemTarget.dataset.end - selectedItemTarget.dataset.start);
        item1.appendChild(document.createTextNode(selectedItem));
        container1.appendChild(item1);
    
        let item2 = document.createElement('spam');
        item2.appendChild(document.createTextNode(e.target.value));
        container1.appendChild(item2);

        e.target.parentElement.nextElementSibling.appendChild(container1);
        //let nameHo = e.target.parentElement.previousElementSibling.children[1].tagName;
       //call to create the sub input element for the serveur 
      
       const objToPass = {'inputUnit':e.target.parentElement.previousElementSibling.children[1],
                          'selectCmd':e.target,
                          'cmdContainer':container1,'target':e.target,     
       };
      

       //e.target.disabled = true;

       console.log('arrive till here');
        createsubdata(objToPass);//************************************** */

       // console.log(e.target.parentElement.previousElementSibling.children[1].tagName);
        e.target.previousElementSibling.disabled = false;//enable getselection btn
        e.target.parentElement.removeChild(e.target);//remove type of selection btn

    }
   
//function to create sub input for the serveur 
    const createsubdata = (obj)=>{
        console.log('inside createsubdata');
        switch(obj.inputUnit.tagName){
            case 'TEXTAREA':
                //code
                let y=['start','end'];
                let i=0;
                [obj.selectCmd.dataset.start, obj.selectCmd.dataset.end].forEach((n)=>{
                    let item1 = document.createElement('input');
                    item1.type = 'hidden';
                    item1.name = obj.inputUnit.name+'_'+obj.selectCmd.value+'_'+y[i]+'_'+counter1;
                    counter1++;
                    //console.log(obj.selectCmd.dataset.start);
                    item1.value = n;
                    //console.log(obj.selectCmd.parentElement);
                    obj.cmdContainer.appendChild(item1);
                   
                    i++;
                });
                if(obj.target.value === 'link'){
                    let item = document.createElement('input');
                    item.type = 'url';
                    item.name = obj.inputUnit.name+'_'+obj.selectCmd.value+'_'+counter1;
                    item.value='';
                    item.setAttribute('required','');
                    obj.cmdContainer.appendChild(item);
                 }

                break;
            case 'INPUT':

                break;
            default:
                //code
        }
    }


    getSelectedContent.forEach((n)=>{
        n.addEventListener('click', (e)=>{
            
            console.log(e.target.parentElement.previousElementSibling.children[1]);
            let selectText = e.target.parentElement.previousElementSibling.children[1];
            selectText.focus();
            
                console.log(selectText.selectionStart, selectText.selectionEnd - selectText.selectionStart);
                if(parseInt(selectText.selectionEnd - selectText.selectionStart) === 0){
                    e.stopImmediatePropagation();
                    e.preventDefault();
                    return;
                }
               
                addControlleur({'obj':e, 'start':selectText.selectionStart,
                                 'end':selectText.selectionEnd, 'text':selectText.value,}
                );
                
            e.stopImmediatePropagation();
            e.preventDefault();
        });
    })
   
}

//const saveCom = document.querySelector('.input-unit-save_selection');
//saveCom.addEventListener('change',saveCommande);




//create the json file to send to the serveur with all the data

const submitForm = ()=>{
   
    for(index=0; index < drawPan.children.length; index++){
        value = drawPan.children[index];
        pan[index] = new Array();
        if(value.classList.contains('input_item-container-container')){
             if(value.children[0].classList.contains('input_item-container')){

                let elmName = value.children[0].lastElementChild.name;
                let elmType = value.children[0].lastElementChild.tagName;
                let elmValue = value.children[0].lastElementChild.value;
                //get the main inpuUnit data
                 
                                   pan[index]['name'] = elmName;
                                   pan[index]['type'] = elmType;
                                   pan[index]['value'] = elmValue;
                                   pan[index]['subElment'] = [];
             }
if(value.lastElementChild.children.length >0){
// //get the sub data related to the main inputUnit
for(i=0; i<value.lastElementChild.children.length; i++)
    {
        n =  value.lastElementChild.children[i];
             switch (n.children[1].textContent) {
                case 'link':
                    //get the sub data (LINK) related to the main inputUnit 
                    getSubDataLink(n,index,i);
                    break;
                case 'quotte':
                     //get the sub data (QUOTTE) related to the main inputUnit
                    getSubDataQuotte(n,index,i);
                    break;
                case 'quote link':
                    
                    break;
             
                default:
                    break;
             }  
    }  
    
}

        } 
    }

    console.log('submit data +++++++++++++++++++++++++++');
    const a = JSON.stringify(pan);
    console.log(pan);
    console.log(a);
    return a;

     //e.preventDefault();//prevent default means prevent http request from being transfert
    
    
}


//validate the input, block the request in case of invalidation
const generalValidation = (e)=>{
    if(formContent.children.length == 0){
        console.log('not element');
        e.preventDefault(); //prevent default means prevent http request from being transfert
        return 0;
    }
    console.log('getting executed before anything')
    e.preventDefault();
    var jsd = submitForm();
    sendData(jsd);
   
    //const jsd = submitForm();
    //e.preventDefault();
   // sendData(jsd);
    //console.log(formContent.children);
    //e.preventDefault();//prevent default means prevent http request from being transfert
    //console.log('submit prevented');
};

submitBtnFrm.addEventListener('click', generalValidation);//form call to stop or validate submittion
formForm.addEventListener('submit', function(e){
   if(e.submitter !== e.target){
        e.stopImmediatePropagation();
        e.preventDefault();
       return 0;
   }
   
});

}
//code for link
const  getSubDataLink = (obj,index)=>{
    pan[index]['subElment'][i] = new Array();
    let start = obj.children[2].value;
    let end = obj.children[3].value;
    let link = obj.children[4].value;
        
          pan[index]['subElment'][i]['start'] = start;
          pan[index]['subElment'][i]['end']   = end;
          pan[index]['subElment'][i]['link'] = link;
          
}
//code for quote
const  getSubDataQuotte = (obj,index)=>{
    pan[index]['subElment'][i] = new Array();
         pan[index]['subElment'][i]['start'] = start;
          pan[index]['subElment'][i]['end']   = end;
}

