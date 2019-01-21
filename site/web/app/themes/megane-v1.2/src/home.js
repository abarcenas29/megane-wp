// import 'styles/home.scss';
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

  $('.story')
    .mouseenter(function () {
      const image = $(this).data('feature-image')
      const $storyBG = $('#story-background')

      $storyBG.css('background-image', `url(${image})`)
      $storyBG.css('opacity', 1)
    })
    .mouseleave(function () {
      const $storyBG = $('#story-background')

      $storyBG.css('opacity', '0')
    })
})

console.log('home')
