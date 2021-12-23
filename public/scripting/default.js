var index1 = 0;
var index2 = 0;

function readURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
  
      reader.onload = function (e) {
        $('#icon').attr('src', e.target.result).width($('#icon').width()).height($('#icon').height());
      };
  
      reader.readAsDataURL(input.files[0]);
    }
}

function productFilter() {

  var a = document.getElementById("optionCategory");
  var catValue =a.value;

  var b = document.getElementById("optionBrand");
  var braValue = b.value;

  var values = new Array(catValue, braValue);
  window.location.href = "/dashboard/showAllProducts/filter/".concat(values);

}

function setfilterParams(){
  document.getElementById("optionCategory").selectedIndex =localStorage.getItem("cat");
  document.getElementById("optionBrand").selectedIndex = localStorage.getItem("bra");
}

function catOp(){
  window.localStorage.setItem("cat",document.getElementById("optionCategory").selectedIndex);
}

function braOp(){
  window.localStorage.setItem("bra",document.getElementById("optionBrand").selectedIndex);
}

function resetDrops(){
  window.localStorage.setItem("cat",0);
  window.localStorage.setItem("bra",0);
}

function editProductDrops(product){
  console.log(product);
}
