const baseURL = "http://localhost/UWM/";
// let pageName =

async function displayNews(pageName) {
  // getting approved news from the database to display
  const a = await fetch(`${baseURL}server/api/${pageName}`, {
    method: "GET",
  });
  let DataInJSON = await a.json();
  let ab = DataInJSON.record;
  let gotD = document.getElementById("newscontainer");
  ab.map((post) => {
    gotD.innerHTML += `<div class = "col-md-3 col-sm-6">
            <div class = "imgBox rounded shadow">
                 <img src = "${post.thumbnail}" alt = "">
            </div>
             <p> ${post.title} </p>
             <P> ${post.publishedAt}</p>
        </div>`;
  });
}
