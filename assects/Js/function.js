export const baseURL = 'http://localhost:81/uwn/';

// Populate News | Sports International Pakistan Artist Business Page | Same Layout
export async function populateNews(pageName) {
  const req = await fetch(`${baseURL}server/api${pageName}`);
  let resp = await req.json();
  let element = document.getElementById('newscontainer');
  if (resp.status == 1) {
    element.innerHTML = '';
    resp.record.map((post) => {
      element.innerHTML += ` <div class="col-md-3 col-sm-6 p-0">
                    <div class="singleBox shadow rounded">
                        <div class="imgBox">
                            <img src="${post.thumbnail}" alt="">
                        </div>

                        <h1 class="m-0 my-2 px-2 title">
                            <a href="article.php?article=${post.slug}&category=international" target="_blank">
                            ${post.title}
                            </a>
                        </h1>
                        <p class="px-2 pb-2  text-end">${post.publishedAt} </p>
                    </div>
                </div>`;
    });
  }
}
