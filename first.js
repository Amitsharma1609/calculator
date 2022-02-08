var screen = document.querySelector('#screen');
var btn = document.querySelectorAll('.btn');
for (item of btn) {
    item.addEventListener('click', (e) => {
        btntext = e.target.innerText;
        switch (btntext) {
            case '×':
                btntext = '*';
                break;
            case '÷':
                btntext = '/';
                break;
            case '%':
                btntext = '%';
                break;
            }
        screen.value += btntext;
        });
    }
function backspc() {
    screen.value = screen.value.substr(0, screen.value.length - 1);
}
function pow() {
    screen.value = Math.pow(screen.value, 2);
}
function sqrt1() {
    screen.value = Math.sqrt(screen.value, 1 / 2);
}
function exp() {
    screen.value = Math.exp(screen.value);
}
function pi() {
    if (screen.value == 0) {
        screen.value = 3.14;
    } else {
        screen.value = screen.value * Math.PI;
        }
    }
function log() {
    screen.value = Math.log10(screen.value);
}
function ln() {
    screen.value = Math.log(screen.value);
}
function fact() {
    var i, num, f;
    if (screen.value == 0) {
        f = 0;
    } else {
        f = 1;
    }
    num = screen.value;
    for (i = 1; i <= num; i++) {
        f = f * i;
    }
    i= i - 1;
    screen.value = f;
    }
function divide() {
    screen.value = 1 / screen.value;
}
function powx() {
    screen.value = 10 ** screen.value;
}
function pow3() {
    screen.value = Math.pow(screen.value, 3);
}
function negps() {
    if (screen.value == 0) {
        screen.value = '-';
    } else {
        screen.value = screen.value * -1;
    }
}
function e() {
    if (screen.value == 0) {
        screen.value = Math.E;
    } else {
        screen.value = screen.value * Math.E;
    }
}
function sin1() {
    screen.value = Math.sin(screen.value * Math.PI / 180);
}
function cos1() {
    screen.value = Math.cos(screen.value * Math.PI / 180);
}
function tan1() {
    screen.value = Math.tan(screen.value * Math.PI / 180);
}
function cot1() {
    screen.value = Math.cos(screen.value * Math.PI / 180) / Math.sin(screen.value * Math.PI / 180);
}
function cosec1() {
    screen.value = 1 / Math.sin(screen.value * Math.PI / 180);
}
function sec1() {
    screen.value = 1 / Math.cos(screen.value * Math.PI / 180);
}
function tanh1() {
    screen.value = Math.tanh(screen.value * Math.PI / 180);
}
function fe() {
    var num = parseInt(screen.value);
    screen.value = num.toExponential();
}
function divide() {
    screen.value = 1 / screen.value;
}
function tens() {
    screen.value = 10 ** screen.value;
}
function expo() {
    var num = parseInt(screen.value);
    screen.value = num.toExponential();
}
function Rad() {
    screen.value = screen.value * 3.14159 / 180.0;
}
function Grad() {
    screen.value = screen.value * 200.00 / 180.0;
}
function floor1() {
    screen.value = Math.floor(screen.value * Math.PI / 180);
}
function ceil1() {
    screen.value = Math.ceil(screen.value);
}
function cosh1() {
    screen.value = Math.cosh(screen.value);
}
function sinh1() {
    screen.value = cMath.sinh(screen.value);
}
function abs1() {
    screen.value = Math.abs(screen.value);
}
function random1() {
    screen.value = Math.random(screen.value);
}
