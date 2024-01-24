var array = [100,200,300,'ok',true,false];
console.log(array.push(array.length));
console.log(array);
array.forEach(function(element,index){
    console.log(index);
});