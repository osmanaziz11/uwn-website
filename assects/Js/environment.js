import { populateNews } from './function.js';

const Populate = () => {
  // =========================================
  // Use this when deploy on server
  // populateNews(window.location.pathname);
  // =========================================

  //   For LocalServer Use this Hard coded string
  populateNews('/international.php');
};
Populate();
