// import './bootstrap';

import oboe from 'oboe';

// console.log('app.js ******', oboe())

function runTest()
{
    console.log('TEST!!!')

    const op = document.getElementById('output')

    oboe('/api/list')
        .node('!elements[*]', (n) => {
            console.log(n)
            const div = document.createElement('div')
            div.className = 'n-item'
            div.innerText = `${n.order}`
            op.appendChild(div)
        })
}



const buttonRunTest = document.getElementById('run-test')
buttonRunTest.onclick = () => {
    runTest()
}

