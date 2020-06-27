


let bubbleSort = (inputArray) =>{
    let jumlahArray = inputArray.length
    let tukar;
    do {
        swapped = false;
        for(let index = 0; index <jumlahArray; index++){
            if(inputArray[index] > inputArray[index+1]){
                let tmp = inputArray[index];
                inputArray[index] = inputArray[index+1];
                inputArray[index+1]=tmp;
                swapped =true;
            }
        }
    } while (swapped)
return inputArray
}


console.log(bubbleSort([20,12,35,11,17,9,58,23,69,21]))