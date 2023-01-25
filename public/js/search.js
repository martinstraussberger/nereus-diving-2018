// jshint esversion: 8
import { searchIndex } from './autocomplete-list-objects.js';

(async function (window, document, undefined) {
  'use strict';
  const searchInput = document.querySelector('#search');
  const resultList = document.querySelector('#search-results');

  /**
   * Create the HTML for each result
   * @param {Object} // partner
   * @param {Number} //id
   * @param {String} //markup
   */
  const createHTML = (partner, id) => {
    const html =
      '<div class="search-container" id="search-results-' +
      id +
      '">' +
      '<div class="search-filter"' +
      '">' +
      '<a href="' + '/pages/partners/' +
      partner.url +
      '">' +
      '<h4 class="partner-h4">' +
      partner.name +
      '</h4>' +
      '<p class="partner-p">' +
      partner.abbr +
      '</p>' +
      '</a>' +
      '</div>' +
      '</div>';
    return html;
  };

  /**
   * Create the markup when no results are found
   * @return {String} The markup
   */
  function createNoResultsHTML() {
    return '<p class="found-content">Sorry, no matches were found.</p>';
  }

  /**
   * Create markup when no results were found
   * @return {String} results HTML
   */
  const createResultsHTML = (results) => {
    let html =
      '<p class="found-content" style="font-weight: 600; font-size: 18px;">Found ' +
      results.length +
      ' matching Partners </p>' +
      '<p id="share" class="share found-content" style="font-weight: 400; font-size: 16px;">Help us to improve our service. Please feel free to share the Spot and Location your were looking for.' +
      ' ' +
      '<i class="far fa-smile"></i></p>' +
      '<a id="share-btn" class="share share-insights-btn" href="#anchor-to-form">Share your Insights</a>';
    html += results
      .map(function (partner, index) {
        return createHTML(partner, index);
      })
      .join('');
    return html;
  };

  /**
   * Search for matches
   * @param {String}
   */
  const search = async (query) => {
    const reg = new RegExp(await query, 'i');
    const partnerName = [];
    const partnerAbbr = [];

    // search content
    searchIndex.forEach(function (partner) {
      if (reg.test(partner.name)) return partnerName.push(partner);
      if (reg.test(partner.abbr)) partnerAbbr.push(partner);
    });

    // Combine the results into a single array
    const results = [].concat(partnerName, partnerAbbr);

    // Display results from json list
    if (searchInput.value < 1) {
      document.getElementById('search-results').style.display = 'none';
    } else {
      resultList.innerHTML =
        results.length < 0 ? createNoResultsHTML() : createResultsHTML(results);
      document.getElementById('search-results').style.display = '';
    }
    if (results.length > 0) {
      document.getElementById('share').style.display = 'none';
      document.getElementById('share-btn').style.display = 'none';
    }
  };

  /**
   * Handle submit events
   */
  const submitHandler = (event) => {
    event.preventDefault();
    search(searchInput.value);
  };

  // Remove site: from the input
  const clearInput = () => {
    searchInput.value = searchInput.value.replace('', '');
  };

  // check content
  if (!searchInput || !resultList || !searchIndex) return;

  // call remove site
  clearInput();
  addEventListener('keyup', submitHandler, false);
})(window, document);
