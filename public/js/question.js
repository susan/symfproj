

const voteContainerTag = document.querySelector(".js-vote-container");

const serverURL='https://localhost:8000/comments/10/vote/';

function selectArrow(event) {
   let direction= ""; 
   let plus = 0;
    if (event.target.dataset.direction === "up") {
      direction="up";
      plus = 1;
    }
    else if (event.target.dataset.direction === "down") {
       direction="down";
       plus = -1;
     }
   let voteTotalTag = event.target.parentNode.parentNode.querySelector(".vote-total");
  //  let count = Number(voteTotalTag.innerText.substring(1));
  //  count = count + plus;
  //  let newText = `+ ${count}`;
  //  voteTotalTag.innerText = newText;

   fetch(`${serverURL}${direction}`, {
      method: "POST",
      headers: {
        'Accept': 'application/json',
        'Content-Type': 'application/json'
      },
      body: {JSON.stringify()}
   })
   .then(r => r.json())
   .then(r => {
    let count = r['votes'];
    let newText = `+ ${count}`;
    voteTotalTag.innerText = newText;
    }
   )
}

voteContainerTag.addEventListener("click", selectArrow);

