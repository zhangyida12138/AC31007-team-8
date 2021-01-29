const questionData = [{
  ask: "my question",
  answerType: 1
}, {
  ask: "question 2",
  answerType: 2
}];

document.getElementById("app").innerHTML = `

${questionData.map(function(qData){
  return `
  <div class="boxArea">
   <h3>${qData.ask}</h3>
   <h5>Insert Description of question here</h5>
   <label for="comment">Answer below</label>
   <textarea class="form-control" rows="3" id="comment"></textarea>
   <input type="text" name="london"><br>
  </div>
  `
}).join(' ')}
`
