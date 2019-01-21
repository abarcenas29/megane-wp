// import 'styles/singles.scss'
import $ from 'jquery-extensions'

$(document).ready(() => {
  /**
   * Add a drop cap in the singles-medium post
   */
  const $singlesMedium = $('#singles-medium')
  // check if its present
  if ($singlesMedium.length) {
    const $firstP = $singlesMedium.find('#post-content').find('p')[0]
    $($firstP).addClass('uk-dropcap')
  }
})

console.log('singles standard')
