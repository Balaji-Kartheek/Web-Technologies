
let number = Math.floor(Math.random() * 20) + 1;

console.log(number);

alert('Welcome to the Game');

let num_guess = 0;

function inputnum() {


    let guess = Number(document.getElementById("guess").value);

    let message = document.getElementById("message");

    if (isNaN(guess)) {
        message.innerHTML = 'Entered value is not a number!';
    }
    else if (guess > 20) {
        message.innerHTML = 'Entered number is not in range, try again.'
        num_guess += 1;
    }
    else if (guess > num) {
        message.innerHTML = "Please try entering a lower number."
        num_guess += 1;
    }
    else if (guess < num) {
        message.innerHTML = "Please try entering a higher number."
        num_guess += 1;
    }
    if (num_guess > 5) {
        message.innerHTML = "You have exceeded the allotted number of tries!"
        return;
    }
    else if (guess == num) {
        message.innerHTML = "You got it! It took you " + num_guess + " tries.";
        num_guess += 1;
        return;
    }


}