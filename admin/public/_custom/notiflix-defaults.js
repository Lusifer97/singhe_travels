 // Notiflix Notify - All Options 
 Notiflix.Notify.Init({
     width: '280px',
     position: 'right-bottom',
     distance: '10px',
     opacity: 1,
     borderRadius: '3px',
     rtl: false,
     timeout: 3000,
     messageMaxLength: 110,
     backOverlay: false,
     backOverlayColor: 'rgba(0,0,0,0.5)',
     plainText: true,
     showOnlyTheLastOne: false,
     clickToClose: false,
     pauseOnHover: true,
     ID: 'NotiflixNotify',
     className: 'notiflix-notify',
     zindex: 999999999,
     useGoogleFont: false,
     fontFamily: 'Quicksand',
     fontSize: '13px',
     cssAnimation: true,
     cssAnimationDuration: 400,
     cssAnimationStyle: 'fade',
     closeButton: false,
     useIcon: true,
     useFontAwesome: true,
     fontAwesomeIconStyle: 'basic',
     fontAwesomeIconSize: '34px',
     success: {
         background: '#32c682',
         textColor: '#fff',
         childClassName: 'success',
         notiflixIconColor: 'rgba(0,0,0,0.2)',
         fontAwesomeClassName: 'fas fa-check-circle',
         fontAwesomeIconColor: 'rgba(0,0,0,0.2)',
         backOverlayColor: 'rgba(50,198,130,0.2)',
     },
     failure: {
         background: '#ff5549',
         textColor: '#fff',
         childClassName: 'failure',
         notiflixIconColor: 'rgba(0,0,0,0.2)',
         fontAwesomeClassName: 'fas fa-times-circle',
         fontAwesomeIconColor: 'rgba(0,0,0,0.2)',
         backOverlayColor: 'rgba(255,85,73,0.2)',
     },
     warning: {
         background: '#eebf31',
         textColor: '#fff',
         childClassName: 'warning',
         notiflixIconColor: 'rgba(0,0,0,0.2)',
         fontAwesomeClassName: 'fas fa-exclamation-circle',
         fontAwesomeIconColor: 'rgba(0,0,0,0.2)',
         backOverlayColor: 'rgba(238,191,49,0.2)',
     },
     info: {
         background: '#26c0d3',
         textColor: '#fff',
         childClassName: 'info',
         notiflixIconColor: 'rgba(0,0,0,0.2)',
         fontAwesomeClassName: 'fas fa-info-circle',
         fontAwesomeIconColor: 'rgba(0,0,0,0.2)',
         backOverlayColor: 'rgba(38,192,211,0.2)',
     },
 });


 // Notiflix Confirm - All Options 
 Notiflix.Confirm.Init({
     className: 'notiflix-confirm',
     width: '300px',
     zindex: 9999999,
     position: 'center',
     distance: '10px',
     backgroundColor: '#f8f8f8',
     borderRadius: '25px',
     backOverlay: true,
     backOverlayColor: 'rgba(0,0,0,0.5)',
     rtl: false,
     useGoogleFont: false,
     fontFamily: 'Quicksand',
     cssAnimation: true,
     cssAnimationStyle: 'fade',
     cssAnimationDuration: 300,
     plainText: true,
     titleColor: '#f46a6a',
     titleFontSize: '16px',
     titleMaxLength: 34,
     messageColor: '#1e1e1e',
     messageFontSize: '14px',
     messageMaxLength: 110,
     buttonsFontSize: '15px',
     buttonsMaxLength: 34,
     okButtonColor: '#f8f8f8',
     okButtonBackground: '#f46a6a',
     cancelButtonColor: '#f8f8f8',
     cancelButtonBackground: '#a9a9a9',
 });

 // Notiflix Loading - All Options 
 Notiflix.Loading.Init({
     className: 'notiflix-loading',
     zindex: 4000,
     backgroundColor: 'rgba(0,0,0,0.8)',
     rtl: false,
     useGoogleFont: false,
     fontFamily: 'Quicksand',
     cssAnimation: true,
     cssAnimationDuration: 400,
     clickToClose: false,
     customSvgUrl: null,
     svgSize: '80px',
     svgColor: '#32c682',
     messageID: 'NotiflixLoadingMessage',
     messageFontSize: '15px',
     messageMaxLength: 34,
     messageColor: '#dcdcdc',
 });

 // Notiflix Block - All Options 
 Notiflix.Block.Init({
     querySelectorLimit: 200,
     className: 'notiflix-block',
     position: 'absolute',
     zindex: 1000,
     backgroundColor: 'rgba(255,255,255,0.9)',
     rtl: false,
     useGoogleFont: false,
     fontFamily: 'Quicksand',
     cssAnimation: true,
     cssAnimationDuration: 300,
     svgSize: '45px',
     svgColor: '#383838',
     messageFontSize: '13px',
     messageMaxLength: 34,
     messageColor: '#383838',
 });

//  Notiflix.Notify.Success('Sol lucet omnibus');
//  Notiflix.Notify.Warning('Sol lucet omnibus');
//  Notiflix.Notify.Failure('Sol lucet omnibus');
//  Notiflix.Notify.Info('Sol lucet omnibus');