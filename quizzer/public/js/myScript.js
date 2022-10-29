let answerBox = document.getElementById('answerBox');
let counter = 0;

function Add_answer() {
    let inputs = `<div class="input-group my-2" id="input_group${counter}">
        <div class="input-group-text">
              <input class="form-check-input mt-0"  name="correct" type="radio" value="${counter}" >
         </div>
                <input type="text" placeholder="گزینه ${counter + 1}"  name="answers[]" class="form-control" >
       </div>`;

    answerBox.innerHTML += inputs;

    counter++;
}

function Remove_answer() {
    if (counter > 0) {
        counter--;
    }

    var answerBox = document.getElementById("answerBox");
    if (answerBox.childNodes[0])
        answerBox.removeChild(answerBox.lastChild);
}