(function(){
    let bnt1 = document.querySelector('#bnt1')
    let bnt2 = document.querySelector('#bnt2')
    let bnt3 = document.querySelector('#bnt3')

    bnt1.addEventListener('click', function(){
        document.getElementById('div1').classList.remove('hidden')
        document.getElementById('div2').classList.add('hidden')
        document.getElementById('div3').classList.add('hidden')
        }
    )
    bnt2.addEventListener('click', function(){
        document.getElementById('div1').classList.add('hidden')
        document.getElementById('div2').classList.remove('hidden')
        document.getElementById('div3').classList.add('hidden')
        }
    )
    bnt3.addEventListener('click', function(){
        document.getElementById('div1').classList.add('hidden')
        document.getElementById('div2').classList.add('hidden')
        document.getElementById('div3').classList.remove('hidden')
        }
    )

})()