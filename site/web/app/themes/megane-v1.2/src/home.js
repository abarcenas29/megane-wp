import 'styles/home.scss'
import $ from 'jquery-extensions'

$(document).ready(() => {
  $('#main-nav-menu').waypoint({
    handler: direction => {
      const $simpleNavigation = $('#simple-navigation')
      $simpleNavigation.find('.uk-logo').css('display', '')
      if (direction === 'down') {
        $simpleNavigation.css('transform', 'translate(0em)')
      } else {
        $simpleNavigation.css('transform', '')
      }
    }
  })
})

console.log('home')
