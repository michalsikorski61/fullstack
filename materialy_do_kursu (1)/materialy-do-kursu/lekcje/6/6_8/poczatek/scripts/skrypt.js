function mainFn(a,callback){
    if(a>0){
        callback(a);
    }
}

function callbackFn(){
    console.log("callback");
}

mainFn(1,callbackFn)