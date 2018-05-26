import './../styles/header.scss'
import $ from 'jquery-extensions'

const isCookieAgree = (localStorage.getItem('ML_cookie_accept')) ? localStorage.getItem('ML_cookie_accept') : false

const $cookieDialog = $('.cookie-dialog')
if (!isCookieAgree) {
  $cookieDialog.find('button').click(function () {
    localStorage.setItem('ML_cookie_accept', true)
    $cookieDialog.remove()
  })
} else {
  $cookieDialog.remove()
}

console.log('Header')
