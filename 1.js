var potongan =0 ;
const hitungBarang = (tipebarang,jumlah)=>{
    return new Promise((resolve,reject)=>{
        if(tipebarang == "A" ){

            var harga=4550;
            if(jumlah<13){

                let potongan = 0 ;
            }
            else {
                let potongan =  231*jumlah;
            }
            let total = (4550*jumlah)-potongan;

            resolve(console.log(
                `Harga : Rp.${harga} \n`+`potongan harga :Rp.${potongan} \n`+
                `Total yang harus dibayar : Rp.${total}`
            )
                
            );
        }else if(tipebarang =="B"){
          
            var harga = 5530;
            if (jumlah <7){
                potongan = 0;
            }
            else{
                potongan = Math.round((23/100)*(harga*jumlah));
            }
            let total = (harga*jumlah)-potongan;

                resolve(console.log(
                    `Harga : Rp.${harga} \n`+`potongan harga :Rp.${potongan} \n`+
                    `Total yang harus dibayar : Rp.${total} \n`
                    
                ));
            
        }else if(tipebarang =="C"){
           var harga = 8653;
            let potongan = 0;
            let total  = 8653*jumlah;
            resolve(
                console.log(
                    `Harga : Rp.${harga} \n`+`potongan harga :Rp.${potongan} \n`+
                    `Total yang harus dibayar : Rp.${total}`
                )
            )
        }else {
            
            reject("tipe barang tidak ada");
        }
    });

}

const A = "A"
const B = "B"
const C = "C"

hitungBarang(A,14).catch(console.error);
hitungBarang(B,14).catch(console.error);
hitungBarang(C,14).catch(console.error);

