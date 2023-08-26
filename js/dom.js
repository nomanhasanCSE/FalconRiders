function itemCounFunction() {
    const itemCountNode = document.querySelectorAll('li');
    const itemCount = itemCountNode.length;
    return itemCount;
}
var totalPrice= 0;
function TotalCostCount(itemCost){
    totalPrice = totalPrice + itemCost;

}

// item 1 card
document.getElementById('btn-1').addEventListener('click', function () {
    const buttonDisable = document.getElementById('btn-1');
    buttonDisable.disabled = true;
   
    // set the item name to the Selected Item List
    const item1Name = document.getElementById('item-1');
    
    const newadded1 = item1Name.innerText;

    const product1Price  = parseInt( document.getElementById('price-1').innerText);
    TotalCostCount(product1Price);
    const TotalCostIsTag = document.getElementById('totalPriceIs');
    TotalCostIsTag.innerText = totalPrice;
 
    console.log(totalPrice);
    

    // add the selected item into ul
    const counter = itemCounFunction();
  
        const listeditem1 = document.getElementById('listeditem');
        const li = document.createElement('li');
        li.innerText = newadded1;
        listeditem1.appendChild(li);
        buttonDisable.style.backgroundColor = 'gray';
    

})

// item 2 card
document.getElementById('btn-2').addEventListener('click', function () {
    const buttonDisable = document.getElementById('btn-2');
    buttonDisable.disabled = true;

    // set the item name to the selected V
    const item2Name = document.getElementById('item-2');
    const newadded2 = item2Name.innerText;

    const product2Price  = parseInt( document.getElementById('price-2').innerText);
    TotalCostCount(product2Price);
    console.log(totalPrice);
    const TotalCostIsTag = document.getElementById('totalPriceIs');
    TotalCostIsTag.innerText = totalPrice;

    // add the selected item into ul
    const counter = itemCounFunction();
    
        const listeditem2 = document.getElementById('listeditem');
        const li = document.createElement('li');
        li.innerText = newadded2;
        listeditem2.appendChild(li);
        buttonDisable.style.backgroundColor = 'gray';
 
  

})

//item 3 card
document.getElementById('btn-3').addEventListener('click', function () {
    const buttonDisable = document.getElementById('btn-3');
    buttonDisable.disabled = true;

    // set the item name to the selected Products
    const item3Name = document.getElementById('item-3');
    const newadded3 = item3Name.innerText;

    const product3Price  = parseInt( document.getElementById('price-3').innerText);
    TotalCostCount(product3Price);
    console.log(totalPrice);
    const TotalCostIsTag = document.getElementById('totalPriceIs');
    TotalCostIsTag.innerText = totalPrice;

    // add the selected item into ul
    const counter = itemCounFunction();
   
        const listeditem3 = document.getElementById('listeditem');
        const li = document.createElement('li');
        li.innerText = newadded3;
        listeditem3.appendChild(li);
        buttonDisable.style.backgroundColor = 'gray';
  

})


// item 4 card
document.getElementById('btn-4').addEventListener('click', function () {
    const buttonDisable = document.getElementById('btn-4');
    buttonDisable.disabled = true;
    console.log('working');
    // set the item name to the selected product
    const item4Name = document.getElementById('item-4');
    const newadded4 = item4Name.innerText;
    const product4Price  = parseInt( document.getElementById('price-4').innerText);
    TotalCostCount(product4Price);
    console.log(totalPrice);
    const TotalCostIsTag = document.getElementById('totalPriceIs');
    TotalCostIsTag.innerText = totalPrice;
    // add the selected item into ul
    const counter = itemCounFunction();
    
        const listeditem4 = document.getElementById('listeditem');
        const li = document.createElement('li');
        li.innerText = newadded4;
        listeditem4.appendChild(li);
        buttonDisable.style.backgroundColor = 'gray';
   

})

// item 5 card

document.getElementById('btn-5').addEventListener('click', function () {
    const buttonDisable = document.getElementById('btn-5');
    buttonDisable.disabled = true;

    // set the item name to the selected V
    const item5Name = document.getElementById('item-5');
    const newadded1 = item5Name.innerText;
    const product5Price  = parseInt( document.getElementById('price-5').innerText);
    TotalCostCount(product5Price);
    console.log(totalPrice);
    const TotalCostIsTag = document.getElementById('totalPriceIs');
    TotalCostIsTag.innerText = totalPrice;

    // add the selected item into ul
    const counter = itemCounFunction();
  
        const listeditem1 = document.getElementById('listeditem');
        const li = document.createElement('li');
        li.innerText = newadded1;
        listeditem1.appendChild(li);
        buttonDisable.style.backgroundColor = 'gray';
  

})

// item 6 card

document.getElementById('btn-6').addEventListener('click', function () {
    const buttonDisable = document.getElementById('btn-6');
    buttonDisable.disabled = true;

    // set the item name to the selected V
    const item6Name = document.getElementById('item-6');
    const newadded6 = item6Name.innerText;

    const product6Price  = parseInt( document.getElementById('price-6').innerText);
    TotalCostCount(product6Price);
    console.log(totalPrice);
    const TotalCostIsTag = document.getElementById('totalPriceIs');
    TotalCostIsTag.innerText = totalPrice;
    // add the selected item into ul
    const counter = itemCounFunction();
  
        const listeditem6 = document.getElementById('listeditem');
        const li = document.createElement('li');
        li.innerText = newadded6;
        listeditem6.appendChild(li);
        buttonDisable.style.backgroundColor = 'gray';
    
   

})