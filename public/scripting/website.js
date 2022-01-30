function productFilter() {

    var a = document.getElementById("optionCategory1");
    var catValue =a.value;

    var b = document.getElementById("optionBrand1");
    var braValue = b.value;

    var values = new Array(catValue, braValue);
    window.location.href = "/home/product/filter/".concat(values);

  }

  function setfilterParams(){
    document.getElementById("optionCategory1").selectedIndex =localStorage.getItem("cat1");
    document.getElementById("optionBrand1").selectedIndex = localStorage.getItem("bra1");
  }

  function catOp(){
    window.localStorage.setItem("cat1",document.getElementById("optionCategory1").selectedIndex);
  }

  function braOp(){
    window.localStorage.setItem("bra1",document.getElementById("optionBrand1").selectedIndex);
  }

  function resetDrops(){
    window.localStorage.setItem("cat1",0);
    window.localStorage.setItem("bra1",0);
  }

  function editProductDrops(product){
    console.log(product);
  }