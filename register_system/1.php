<body class="production bg-cookpad-gray-200 webview" data-controller="modal login source-tracking" data-action="loginRequired@document->modal#openLogin" data-modal-login-path-value="/th/accounts/new" data-source-tracking-screen-value="recipe_editor">
    
    <script type="text/javascript">
  window.App = {
    mobile: false,
    currentUser: 29512510,
    genericError: "อุ้บส์, มีปัญหาบางอย่างเกิดขึ้น\nลองใหม่อีกครั้งได้ไหมคะ?"
  }
</script>


    <!-- Overlays -->
    

    <div id="page" data-modal-target="page">
      <!-- Header -->
      <header id="header" data-toggle-class="main-header--show-search-box" class="main-header flex h-header  media webview__hidden shadow-sm">
  <div class="flex items-center justify-between w-full">

    <a class="flex-none main-header__brand" href="https://cookpad.com/th">
  <img alt="Cookpad" class="inline h-8" src="//assets-global.cpcdn.com/assets/logo_circle-b64d2213e198178ddebdc070777b8a499069aa570a6aa12244a441482ae5ed92.png">
  <img alt="Cookpad" class="mt-xs h-8 hidden sm:inline" src="//assets-global.cpcdn.com/assets/logo_text-368daae18951c011f6ec999fcff08f7dd386c2673b7f0e4cda58227138c6b300.png">
</a>

      <div class="ml-sm flex-1 print:hidden main-header__search hidden sm:block">
        <form class="header-search flex" autocomplete="off" data-controller="link-rewrite visibility clear rewrite-url" data-action="link-rewrite#appendURLParams rewrite-url#rewrite" data-link-rewrite-params-value="{&quot;event&quot;:&quot;search.typed_query&quot;}" action="/th/search" accept-charset="UTF-8" method="get">
          <div class="md:relative flex items-center flex-1 h-10 md:px-sm border border-r-0 border-cookpad-white md:border-cookpad-gray-400 rounded-lg rounded-r-none text-cookpad-14 xs:text-cookpad-16">
            <button name="button" type="submit" class="md:hidden flex items-center text-cookpad-18 pr-sm focus:outline-none"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="mise-icon mise-icon-search-unselected"><path d="M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0z" stroke="currentColor" stroke-width="1.5"></path><path d="m15 15 5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
</button>

            <input type="text" name="q" id="navigation_search" class="outline-none placeholder-cookpad-gray-600 w-full text-cookpad-gray-700 " placeholder="ค้นหาจากชื่อเมนู, วัตถุดิบ, อุปกรณ์ที่ใช้ ..." autocapitalize="off" data-action="clear#toggle focus->clear#toggle focus->visibility#show blur->visibility#hide" data-controller="autocomplete" data-autocomplete-url-value="https://cookpad.com/th/suggestions.json" data-autocomplete-container-class="w-full bg-cookpad-gray-100 left-0 top-full overflow-y-auto text-cookpad-gray-500 shadow rounded z-10 h-screen xs:h-auto" data-autocomplete-item-class="autocomplete-suggestion cursor-pointer block p-sm" data-clear-target="input" data-rewrite-url-target="input">


            <a class="text-cookpad-gray-400 leading-10 outline-none ml-xs hidden md:hidden" tabindex="-1" data-clear-target="link" data-action="clear#clear" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="mise-icon mise-icon-close-circle"><path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10zM15 9l-6 6M9 9l6 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
</a>
          </div>

         <button name="button" type="submit" title="ค้นหา" class="hidden md:block rounded-r-lg text-cookpad-white btn--cookpad-orange-500 current-user-premium-badge:bg-cookpad-premium-gold-500 px-sm"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="mise-icon mise-icon-search-unselected"><path d="M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0z" stroke="currentColor" stroke-width="1.5"></path><path d="m15 15 5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
</button>


          <div class="page-overlay fixed inset-x-0 bottom-0 top-header hidden md:hidden" data-visibility-target="hideable"></div>
</form>      </div>

    <div class="header-controls print:hidden flex-initial min-w-0" id="action_buttons">
        <div id="action_bar">
  <div class="whitespace-nowrap flex items-center justify-between sm:px-sm">
        <div data-controller="stateful" data-action="editor:saved@document->stateful#setState editor:failed@document->stateful#setState">
          <span data-stateful-target="state" data-state="editor:saved">
            <form class="button_to" method="post" action="/th/recipes/14781680/publish"><input type="hidden" name="_method" value="patch"><input class="btn btn--cookpad-orange-500 btn--wide" data-behavior="publish" data-confirm="พร้อมที่จะเผยแพร่แล้ว?" type="submit" value="เผยแพร่"><input type="hidden" name="authenticity_token" value="6hCGw2ai3mPDzGAvcJe4+6eKLXY2K/3YAVBSaOBoDgC8C37d29tLSMVt68+0uERTmyp4fdQ/augnMkvGFSeI5Q=="></form>

          </span>
          <span data-stateful-target="state" data-state="editor:failed" class="hidden">
            <form class="button_to" method="post" action="/th/recipes/14781680/publish"><input type="hidden" name="_method" value="patch"><input disabled="disabled" class="btn btn--cookpad-orange-500 btn--wide" data-behavior="publish" data-confirm="พร้อมที่จะเผยแพร่แล้ว?" type="submit" value="เผยแพร่"><input type="hidden" name="authenticity_token" value="QLQo3q+EfYDZTUXIXelC4pvnUJBhv6/iSKxy5z6qtAcWr9DAEv3oq9/sziiZxr5Kp0cFm4OrONJuzmtJy+Uy4g=="></form>

          </span>
        </div>

    <div class="p-sm text-cookpad-12 text-cookpad-gray-500" data-controller="stateful" data-action="editor:saving@document->stateful#setState editor:saved@document->stateful#setState editor:failed@document->stateful#setState">
  <span data-stateful-target="state" data-state="editor:saving" class="hidden">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 50 50" fill="none" id="saver" class="animate-spin mise-icon mise-icon-spinner"><path fill="currentColor" d="M43.935 25.145c0-10.318-8.364-18.683-18.683-18.683-10.318 0-18.683 8.365-18.683 18.683h4.068c0-8.071 6.543-14.615 14.615-14.615s14.615 6.543 14.615 14.615h4.068z"></path></svg>
<span class="mise-icon-text">กำลังบันทึก</span>
  </span>
  <span data-stateful-target="state" data-state="editor:saved" class="">
    บันทึกแล้ว
  </span>
  <span data-stateful-target="state" data-state="editor:failed" class="text-cookpad-red-700 hidden">
    ไม่สามารถบันทึกได้ <a class="strong" data-behavior="retry_unsaved" href="#editor">ลองอีกครั้ง？</a>
  </span>
</div>


    <div class="relative inline-block " data-controller="dropdown" data-dropdown-toggle-class="hidden">
          <a class="js__rich block leading-none" data-action="click->dropdown#toggle click@window->dropdown#hide" title="ดูเพิ่มเติม" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="text-cookpad-24 flow-root text-cookpad-gray-500 flex-grow flex-shrink-0 text-right icf--spaced mise-icon mise-icon-overflow-horizontal"><path d="M11 12a1 1 0 1 0 2 0 1 1 0 0 0-2 0zM18 12a1 1 0 1 0 2 0 1 1 0 0 0-2 0zM4 12a1 1 0 1 0 2 0 1 1 0 0 0-2 0z" fill="currentColor" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
</a>



  <div class="z-40 w-40 absolute right-0 hidden" data-dropdown-target="menu">
    <div class="-mt-sm mr-xs h-2 pt-xs top-px relative float-right z-10 overflow-y-hidden">
  <div class="h-3 w-3 bg-cookpad-white border border-cookpad-gray-400 transform rotate-45"></div>
</div>


    <ul class="dropdown-menu divide-y divide-cookpad-gray-400 relative z-0">
              <li class="text-cookpad-16 text-cookpad-gray-700 hover:bg-cookpad-gray-200">
  
          <a class="dropdown-menu__item-link" data-confirm="คุณแน่ใจว่าจะลบนะคะ?" rel="nofollow" data-method="delete" href="/th/recipes/14781680">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" class="mr-sm mise-icon mise-icon-bin"><path fill-rule="evenodd" clip-rule="evenodd" d="M8.1 3.15a.183.183 0 0 0-.173.125L7.569 4.35h4.862l-.358-1.075a.183.183 0 0 0-.174-.125H8.101zm5.702 1.2-.495-1.486a1.483 1.483 0 0 0-1.408-1.014H8.101c-.639 0-1.206.409-1.408 1.014L6.198 4.35H2.5a.65.65 0 1 0 0 1.3h1.059l.585 8.782a3.983 3.983 0 0 0 3.975 3.718h3.763a3.983 3.983 0 0 0 3.974-3.718l.585-8.782H17.5a.65.65 0 1 0 0-1.3H13.802zm1.337 1.3H4.86l.58 8.695A2.683 2.683 0 0 0 8.12 16.85h3.763a2.683 2.683 0 0 0 2.677-2.505l.58-8.695zM8.333 7.684a.65.65 0 0 1 .65.65v5.833a.65.65 0 1 1-1.3 0V8.334a.65.65 0 0 1 .65-.65zm3.984.65a.65.65 0 1 0-1.3 0v3.333a.65.65 0 1 0 1.3 0V8.334z" fill="currentColor"></path></svg>
<span class="mise-icon-text">ลบ</span>
</a>

</li>
</ul>  </div>
</div>
  </div>
</div>

    </div>
  </div>

  <div class="absolute w-full inset-x-0 top-full">
</div>

</header>


      <!-- Main -->
      <div data-intercept-banner-container-id-value="popup-overlay" data-intercept-banner-overlay-class="popup-overlay" data-intercept-banner-url-value="/th/activity_logs?event=intercept_dialog.show&amp;keyword=open_in_app">
        
        <div class="main-container " id="main">
          <div id="popup-overlay"></div>
          <div id="main_contents" class="main-content  webview__contents">
            
<div class="document">
  <div id="recipe_main">
    <div data-controller="dir">
  <div id="editor" class="editor editor--active editor--pc" data-editable-by="29512510" data-controller="title-to-ingredients editor--recipe-links" data-title-to-ingredients-url-value="/th/recipes/14781680/ingredient_suggestions">
    
        <section id="about" class="bg-cookpad-white">
  <div class="mb-sm">
    <div id="recipe_image__recipe_14781680" data-record="/th/recipes?partial=recipe_image">
  
  <div id="recipe_image" class="image droppable field-group" data-field="file" data-field-name="file" data-ajax-upload="/th/recipe/images">
      <div class="w-12 h-12 absolute inset-1/2 transform -translate-x-1/2 -translate-y-1/2">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 50 50" fill="none" class="w-12 h-12 hidden loading:inline-block animate-spin mise-icon mise-icon-spinner"><path fill="currentColor" d="M43.935 25.145c0-10.318-8.364-18.683-18.683-18.683-10.318 0-18.683 8.365-18.683 18.683h4.068c0-8.071 6.543-14.615 14.615-14.615s14.615 6.543 14.615 14.615h4.068z"></path></svg>

  </div>


      <div class="bg-cookpad-gray-200">
  <div class="py-rg md:py-lg image-upload text-center">
    <div class="text-cookpad-gray-600">
      <img class="w-16 mx-auto pointer-events-none" src="//assets-global.cpcdn.com/assets/camera-e526534167ed86f4891b97ae3da7bb6327b7679a0ad7c9b837434847f8457434.png">

      <p class="text-cookpad-20 font-semibold mt-md">ใส่ภาพอาหารที่ทำเสร็จ</p>

      <p class="text-cookpad-14">เป็นแรงบันดาลใจให้เพื่อนๆ ทำตามสูตรของเรา</p>
    </div>
    <input type="file" name="file" aria-label="ใส่ภาพอาหารที่ทำเสร็จ" accept="image/*">
  </div>
</div>

  </div>

</div>
  </div>

  <div class="px-rg pb-rg">
    <div id="intro__recipe_14781680" data-record="/th/recipes?partial=intro" data-controller="editor--origin-location">
  
  <div class="flex">
    <h1 class="editor-input w-full mb-rg text-cookpad-20 md:text-cookpad-36 font-semibold leading-tight field-group medium-editor-element medium-editor-placeholder placeholder" dir="auto" data-field="" data-field-name="title" data-placeholder="ชื่อสูตรอาหาร..." data-maxlength="100" data-role="recipe-title" data-title-to-ingredients-target="title" data-action="" contenteditable="true" spellcheck="true" data-medium-editor-element="true" role="textbox" aria-multiline="true" data-medium-editor-editor-index="1" medium-editor-index="b7d8bef8-630e-af9e-b325-75f8eb0e9421">
      
    </h1>
  </div>
  <div data-field-group="" class="mb-xs field-group" data-editor--origin-location-target="fieldGroup">
      <div class="editor-input text-cookpad-20 leading-tight break-words rounded-b-none placeholder" dir="auto" data-field="textarea" data-field-name="story" data-placeholder="เล่าเคล็ดลับ/ที่มา/ใส่ # ร่วมกิจกรรมของสูตรนี้ - เล่าเรื่องราวความพิเศษของสูตรนี้และชวนเพื่อนๆ มาทำตามสูตรของเราได้เลย" data-maxlength="1500" data-editor--origin-location-target="storyField"><textarea rows="1" placeholder="เล่าเคล็ดลับ/ที่มา/ใส่ # ร่วมกิจกรรมของสูตรนี้ - เล่าเรื่องราวความพิเศษของสูตรนี้และชวนเพื่อนๆ มาทำตามสูตรของเราได้เลย" maxlength="1500" dir="auto" style="width: 100%; background: none; border: none; outline: none; resize: none; padding: 0px; overflow: hidden; overflow-wrap: break-word; height: 102px;"></textarea></div>
      <div class="rounded-b bg-cookpad-gray-200 px-sm">
  <div class="py-sm border-dotted border-t-2 border-cookpad-gray-400" data-editor--origin-location-target="block">
    <div class="relative flex text-cookpad-gray-500 " data-editor--origin-location-target="addSection">
      <div class="flex-col flex-grow">
        เพิ่มต้นกำเนิดของสูตร
      </div>
      <div class="flex-col self-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="mise-icon mise-icon-chevron-right"><path d="m9 6 6 6-6 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>

      </div>
      <a class="absolute inset-0" rel="nofollow" title="เพิ่มต้นกำเนิดของสูตร" data-action="modal#advance mousedown->editor--origin-location#preventEditorFieldBlur" href="/th/recipe_origin_locations?recipe_id=14781680"></a>
    </div>

    <div class="flex hidden" data-editor--origin-location-target="selectedSection">
      <div class="flex-col flex-grow relative">
        <p class="text-cookpad-gray-700">
          ต้นกำเนิด: <span data-editor--origin-location-target="selectedLocation"></span>
        </p>
        <a class="absolute inset-0" rel="nofollow" data-action="modal#advance mousedown->editor--origin-location#preventEditorFieldBlur" href="/th/recipe_origin_locations?recipe_id=14781680"></a>
      </div>
      <div class="flex-col self-center">
        <form data-action="ajax:success->editor--origin-location#clearLocation mousedown->editor--origin-location#preventEditorFieldBlur" data-remote="true" action="/th/recipes/14781680/origin" accept-charset="UTF-8" method="post"><input type="hidden" name="_method" value="delete"><input type="hidden" name="authenticity_token" value="sBikoLHp14QY9CMFUVOHegNtRUAcbjCqqoIgP3WUnCGf1GD1pVDL5uQ2SLZrjh919jcKhz6W24+r55aJuqhATg==">
          <button type="submit" title="ลบออก">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" class="mise-icon mise-icon-close-circle"><path d="M10 18.333a8.333 8.333 0 1 0 0-16.666 8.333 8.333 0 0 0 0 16.666zM12.5 7.5l-5 5M7.5 7.5l5 5" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"></path></svg>

          </button>
</form>      </div>
    </div>

  </div>
</div>

  </div>

</div>
  </div>

  <div class="px-rg">
    <div id="serving__recipe_14781680" class="flex items-center justify-between" data-record="/th/recipes?partial=serving">
  
  <label class="text-cookpad-gray-600 font-normal">สำหรับ</label>

  <div class="w-1/2 text-cookpad-gray-600" data-controller="editor--character-count">
    <div class="editor-input w-full whitespace-nowrap overflow-hidden border border-cookpad-gray-200 field-group medium-editor-element placeholder medium-editor-placeholder" data-field="" data-field-name="serving" data-placeholder="2 คน" data-maxlength="50" data-editor--character-count-target="field" data-action="focus->editor--character-count#showMessage focusout->editor--character-count#hideMessage keyup->editor--character-count#updateMessage" data-character-count-limit-class="border-cookpad-red-500" contenteditable="true" spellcheck="true" data-medium-editor-element="true" role="textbox" aria-multiline="true" data-medium-editor-editor-index="2" medium-editor-index="36d6cd58-fa84-4ad0-87d9-4d91c84215a0">
      
    </div>
    <span class="flex flex-col items-end mt-px text-cookpad-gray-500 text-cookpad-12 invisible" data-editor--character-count-target="message" data-character-count-limit-class="text-cookpad-red-500">0/50</span>
  </div>

</div>

  </div>

  <div class="px-rg">
    <div id="cooking_time__recipe_14781680" class="flex items-center justify-between" data-record="/th/recipes?partial=cooking_time">
  
  <label class="text-cookpad-gray-600 font-normal">เวลาที่ใช้</label>

  <div class="w-1/2 text-cookpad-gray-600" data-controller="editor--character-count">
    <div class="editor-input w-full whitespace-nowrap overflow-hidden border border-cookpad-gray-200 field-group medium-editor-element medium-editor-placeholder placeholder" data-field="" data-field-name="cooking_time" data-placeholder="1 ชม. 30 นาที" data-maxlength="50" data-editor--character-count-target="field" data-action="focus->editor--character-count#showMessage focusout->editor--character-count#hideMessage keyup->editor--character-count#updateMessage" data-character-count-limit-class="border-cookpad-red-500" contenteditable="true" spellcheck="true" data-medium-editor-element="true" role="textbox" aria-multiline="true" data-medium-editor-editor-index="3" medium-editor-index="414fd80a-d8a6-7014-52eb-33fc14f0ebe6">
      
    </div>
    <span class="flex flex-col items-end mt-px text-cookpad-gray-500 text-cookpad-12 invisible" data-editor--character-count-target="message" data-character-count-limit-class="text-cookpad-red-500">0/0</span>
  </div>

</div>

  </div>
</section>


        <section id="ingredients" class="ingredients-container p-rg bg-cookpad-white mt-sm" data-controller="editor--add-ingredient-suggestion editor--add-record">
  <div class="mb-sm">
    <h2 class="text-cookpad-24 font-semibold mb-sm">ส่วนผสม</h2>
  </div>


  <div data-record-list="" data-editor--add-record-target="list" data-editor--add-ingredient-suggestion-target="list">
    <template data-type="default">
      <li id="new_ingredient" class="ingredient py-xs text-cookpad-16 " data-record="/th/recipes/14781680/ingredients?headline=false" data-controller="editor--delete-record editor--character-count editor--recipe-links" data-editor--delete-record-confirmation-message-value="คุณแน่ใจว่าจะลบนะคะ?">
  
  <div data-field-group="" class="flex items-center">
    <div class="text-cookpad-gray-400 flex-none -mt-rg">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="cursor-move mise-icon mise-icon-move-bars" data-behavior="handle"><path d="M21 10H3M21 6H3M21 14H3M21 18H3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>


    </div>

    <div class="flex-grow mx-sm">
        <div id="recipe_link_add_ingredient">
            <div class="float-right mt-xs mr-xs p-xs " data-editor--recipe-links-target="recipeLinkAdd" data-controller="stateful" data-action="editor:saving@document->stateful#setState editor:saved@document->stateful#setState editor:failed@document->stateful#setState">
    <span data-stateful-target="state" data-state="editor:saved">
      <a title="ใส่ลิงก์สูตรอื่น" data-action="source-tracking#appendVia modal#advance mousedown->editor--recipe-links#preventEditorFieldBlur" data-behavior="reference" href="/th/recipe_links/new?recipe_id=14781680&amp;source_id=new_source_id&amp;source_type=Ingredient&amp;target_type=Tip"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" class="text-cookpad-gray-600 mise-icon mise-icon-add-attachment"><path d="M4.583 13.304a2.167 2.167 0 0 0 3.064 0L12.36 8.59c.41-.411.698-.898.862-1.416a.577.577 0 0 1 .434-.404c.347-.064.656.227.56.566a4.479 4.479 0 0 1-1.15 1.96l-4.713 4.715a3.167 3.167 0 1 1-4.479-4.479l5.438-5.437a.5.5 0 0 1 .707.707L4.583 10.24a2.167 2.167 0 0 0 0 3.064zM7.411 3.64 2.226 8.825a.5.5 0 0 1-.708-.707l5.186-5.185A4.482 4.482 0 0 1 9.46 1.635c.334-.032.566.296.47.618a.572.572 0 0 1-.486.39 3.485 3.485 0 0 0-2.034.997z" fill="currentColor"></path><path d="m11.24 7.354-4.772 4.771a.5.5 0 1 1-.707-.707l4.772-4.772a.5.5 0 1 1 .707.708z" fill="currentColor"></path><path d="M4.583 13.304a2.167 2.167 0 0 0 3.064 0L12.36 8.59c.41-.411.698-.898.862-1.416a.577.577 0 0 1 .434-.404c.347-.064.656.227.56.566a4.479 4.479 0 0 1-1.15 1.96l-4.713 4.715a3.167 3.167 0 1 1-4.479-4.479l5.438-5.437a.5.5 0 0 1 .707.707L4.583 10.24a2.167 2.167 0 0 0 0 3.064zM7.411 3.64 2.226 8.825a.5.5 0 0 1-.708-.707l5.186-5.185A4.482 4.482 0 0 1 9.46 1.635c.334-.032.566.296.47.618a.572.572 0 0 1-.486.39 3.485 3.485 0 0 0-2.034.997z" stroke="currentColor" stroke-width=".3" stroke-linecap="round" stroke-linejoin="round"></path><path d="m11.24 7.354-4.772 4.771a.5.5 0 1 1-.707-.707l4.772-4.772a.5.5 0 1 1 .707.708z" stroke="currentColor" stroke-width=".3" stroke-linecap="round" stroke-linejoin="round"></path><path d="M13.333 1.333v4M11.333 3.333h4" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"></path></svg>
</a>
    </span>
    <span data-stateful-target="state" data-state="editor:saving editor:failed" class="hidden">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" class="text-cookpad-gray-600 mise-icon mise-icon-add-attachment"><path d="M4.583 13.304a2.167 2.167 0 0 0 3.064 0L12.36 8.59c.41-.411.698-.898.862-1.416a.577.577 0 0 1 .434-.404c.347-.064.656.227.56.566a4.479 4.479 0 0 1-1.15 1.96l-4.713 4.715a3.167 3.167 0 1 1-4.479-4.479l5.438-5.437a.5.5 0 0 1 .707.707L4.583 10.24a2.167 2.167 0 0 0 0 3.064zM7.411 3.64 2.226 8.825a.5.5 0 0 1-.708-.707l5.186-5.185A4.482 4.482 0 0 1 9.46 1.635c.334-.032.566.296.47.618a.572.572 0 0 1-.486.39 3.485 3.485 0 0 0-2.034.997z" fill="currentColor"></path><path d="m11.24 7.354-4.772 4.771a.5.5 0 1 1-.707-.707l4.772-4.772a.5.5 0 1 1 .707.708z" fill="currentColor"></path><path d="M4.583 13.304a2.167 2.167 0 0 0 3.064 0L12.36 8.59c.41-.411.698-.898.862-1.416a.577.577 0 0 1 .434-.404c.347-.064.656.227.56.566a4.479 4.479 0 0 1-1.15 1.96l-4.713 4.715a3.167 3.167 0 1 1-4.479-4.479l5.438-5.437a.5.5 0 0 1 .707.707L4.583 10.24a2.167 2.167 0 0 0 0 3.064zM7.411 3.64 2.226 8.825a.5.5 0 0 1-.708-.707l5.186-5.185A4.482 4.482 0 0 1 9.46 1.635c.334-.032.566.296.47.618a.572.572 0 0 1-.486.39 3.485 3.485 0 0 0-2.034.997z" stroke="currentColor" stroke-width=".3" stroke-linecap="round" stroke-linejoin="round"></path><path d="m11.24 7.354-4.772 4.771a.5.5 0 1 1-.707-.707l4.772-4.772a.5.5 0 1 1 .707.708z" stroke="currentColor" stroke-width=".3" stroke-linecap="round" stroke-linejoin="round"></path><path d="M13.333 1.333v4M11.333 3.333h4" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"></path></svg>

    </span>
  </div>

        </div>
      <div class="pr-md editor-input box-content " data-field="" data-field-name="quantity_and_name" data-placeholder="ไข่ 2 ฟอง" data-maxlength="200" data-editor--character-count-target="field" data-editor--delete-record-target="field" data-editor--add-ingredient-suggestion-target="field" data-action="focus->editor--character-count#showMessage focusout->editor--character-count#hideMessage keyup->editor--character-count#updateMessage focus->editor--recipe-links#showAddLink focusout->editor--recipe-links#hideAddLink" data-character-count-limit-class="border-cookpad-red-500" data-add-sibling-disabled="false" data-splittable-field="true">
      </div>
        <span class="flex flex-col items-end mt-px text-cookpad-gray-500 text-cookpad-12 invisible" data-editor--character-count-target="message" data-character-count-limit-class="text-cookpad-red-500">0/0</span>
    </div>

    <div class="-mt-rg">
        <div class="relative inline-block " data-controller="dropdown" data-dropdown-toggle-class="hidden">
              <a class="js__rich block leading-none" data-action="click->dropdown#toggle click@window->dropdown#hide" title="ดูเพิ่มเติม" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="text-cookpad-gray-400 mise-icon mise-icon-overflow-horizontal"><path d="M11 12a1 1 0 1 0 2 0 1 1 0 0 0-2 0zM18 12a1 1 0 1 0 2 0 1 1 0 0 0-2 0zM4 12a1 1 0 1 0 2 0 1 1 0 0 0-2 0z" fill="currentColor" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
</a>



  <div class="z-40 w-40 absolute right-0 hidden" data-dropdown-target="menu">
    <div class="-mt-sm mr-xs h-2 pt-xs top-px relative float-right z-10 overflow-y-hidden">
  <div class="h-3 w-3 bg-cookpad-white border border-cookpad-gray-400 transform rotate-45"></div>
</div>


    <ul class="dropdown-menu divide-y divide-cookpad-gray-400 relative z-0">
                  

            <li class="text-cookpad-16 text-cookpad-gray-700 hover:bg-cookpad-gray-200">
  
              <a class="dropdown-menu__item-link" data-action="editor--delete-record#click" href="#">
    ลบส่วนผสม
</a>

</li>
</ul>  </div>
</div>
    </div>
  </div>


</li>
    </template>
    <template data-type="section">
      <li id="new_ingredient" class="ingredient py-xs text-cookpad-16 mt-rg -mb-px text-cookpad-gray-500" data-record="/th/recipes/14781680/ingredients?headline=true" data-controller="editor--delete-record editor--character-count editor--recipe-links" data-editor--delete-record-confirmation-message-value="คุณแน่ใจว่าจะลบนะคะ?">
  
  <div data-field-group="" class="flex items-center">
    <div class="text-cookpad-gray-400 flex-none -mt-rg">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="cursor-move mise-icon mise-icon-move-bars" data-behavior="handle"><path d="M21 10H3M21 6H3M21 14H3M21 18H3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>


    </div>

    <div class="flex-grow mx-sm">
      <div class="pr-md editor-input box-content border-b border-cookpad-gray-400 rounded-b-none font-semibold" data-field="" data-field-name="quantity_and_name" data-placeholder="แบ่งหัวข้อ" data-maxlength="200" data-editor--character-count-target="field" data-editor--delete-record-target="field" data-editor--add-ingredient-suggestion-target="field" data-action="focus->editor--character-count#showMessage focusout->editor--character-count#hideMessage keyup->editor--character-count#updateMessage focus->editor--recipe-links#showAddLink focusout->editor--recipe-links#hideAddLink" data-character-count-limit-class="border-cookpad-red-500" data-add-sibling-disabled="true" data-splittable-field="true">
      </div>
        <span class="flex flex-col items-end mt-px text-cookpad-gray-500 text-cookpad-12 invisible" data-editor--character-count-target="message" data-character-count-limit-class="text-cookpad-red-500">0/0</span>
    </div>

    <div class="-mt-rg">
        <div class="relative inline-block " data-controller="dropdown" data-dropdown-toggle-class="hidden">
              <a class="js__rich block leading-none" data-action="click->dropdown#toggle click@window->dropdown#hide" title="ดูเพิ่มเติม" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="text-cookpad-gray-400 mise-icon mise-icon-overflow-horizontal"><path d="M11 12a1 1 0 1 0 2 0 1 1 0 0 0-2 0zM18 12a1 1 0 1 0 2 0 1 1 0 0 0-2 0zM4 12a1 1 0 1 0 2 0 1 1 0 0 0-2 0z" fill="currentColor" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
</a>



  <div class="z-40 w-40 absolute right-0 hidden" data-dropdown-target="menu">
    <div class="-mt-sm mr-xs h-2 pt-xs top-px relative float-right z-10 overflow-y-hidden">
  <div class="h-3 w-3 bg-cookpad-white border border-cookpad-gray-400 transform rotate-45"></div>
</div>


    <ul class="dropdown-menu divide-y divide-cookpad-gray-400 relative z-0">
                  

            <li class="text-cookpad-16 text-cookpad-gray-700 hover:bg-cookpad-gray-200">
  
              <a class="dropdown-menu__item-link" data-action="editor--delete-record#click" href="#">
    ลบหัวข้อส่วนผสมนี้
</a>

</li>
</ul>  </div>
</div>
    </div>
  </div>


</li>
    </template>
    <ol class="list-unstyled text-cookpad-18 ui-sortable" data-record-list-container="" data-behavior="sortable" data-sort-url="/th/recipes/14781680/ingredients/sort" dir="auto">
      <li id="ingredient_71025163" class="ingredient py-xs text-cookpad-16 " data-record="/th/recipes/14781680/ingredients?headline=false" data-controller="editor--delete-record editor--character-count editor--recipe-links" data-editor--delete-record-confirmation-message-value="คุณแน่ใจว่าจะลบนะคะ?">
  
  <div data-field-group="" class="flex items-center field-group">
    <div class="text-cookpad-gray-400 flex-none -mt-rg">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="cursor-move mise-icon mise-icon-move-bars ui-sortable-handle" data-behavior="handle"><path d="M21 10H3M21 6H3M21 14H3M21 18H3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>


    </div>

    <div class="flex-grow mx-sm">
        <div id="recipe_link_add_ingredient_71025163">
            <div class="float-right mt-xs mr-xs p-xs invisible" data-editor--recipe-links-target="recipeLinkAdd" data-controller="stateful" data-action="editor:saving@document->stateful#setState editor:saved@document->stateful#setState editor:failed@document->stateful#setState">
    <span data-stateful-target="state" data-state="editor:saved" class="">
      <a title="ใส่ลิงก์สูตรอื่น" data-action="source-tracking#appendVia modal#advance mousedown->editor--recipe-links#preventEditorFieldBlur" data-behavior="reference" href="/th/recipe_links/new?recipe_id=14781680&amp;source_id=71025163&amp;source_type=Ingredient&amp;target_type=Tip" class=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" class="text-cookpad-gray-600 mise-icon mise-icon-add-attachment"><path d="M4.583 13.304a2.167 2.167 0 0 0 3.064 0L12.36 8.59c.41-.411.698-.898.862-1.416a.577.577 0 0 1 .434-.404c.347-.064.656.227.56.566a4.479 4.479 0 0 1-1.15 1.96l-4.713 4.715a3.167 3.167 0 1 1-4.479-4.479l5.438-5.437a.5.5 0 0 1 .707.707L4.583 10.24a2.167 2.167 0 0 0 0 3.064zM7.411 3.64 2.226 8.825a.5.5 0 0 1-.708-.707l5.186-5.185A4.482 4.482 0 0 1 9.46 1.635c.334-.032.566.296.47.618a.572.572 0 0 1-.486.39 3.485 3.485 0 0 0-2.034.997z" fill="currentColor"></path><path d="m11.24 7.354-4.772 4.771a.5.5 0 1 1-.707-.707l4.772-4.772a.5.5 0 1 1 .707.708z" fill="currentColor"></path><path d="M4.583 13.304a2.167 2.167 0 0 0 3.064 0L12.36 8.59c.41-.411.698-.898.862-1.416a.577.577 0 0 1 .434-.404c.347-.064.656.227.56.566a4.479 4.479 0 0 1-1.15 1.96l-4.713 4.715a3.167 3.167 0 1 1-4.479-4.479l5.438-5.437a.5.5 0 0 1 .707.707L4.583 10.24a2.167 2.167 0 0 0 0 3.064zM7.411 3.64 2.226 8.825a.5.5 0 0 1-.708-.707l5.186-5.185A4.482 4.482 0 0 1 9.46 1.635c.334-.032.566.296.47.618a.572.572 0 0 1-.486.39 3.485 3.485 0 0 0-2.034.997z" stroke="currentColor" stroke-width=".3" stroke-linecap="round" stroke-linejoin="round"></path><path d="m11.24 7.354-4.772 4.771a.5.5 0 1 1-.707-.707l4.772-4.772a.5.5 0 1 1 .707.708z" stroke="currentColor" stroke-width=".3" stroke-linecap="round" stroke-linejoin="round"></path><path d="M13.333 1.333v4M11.333 3.333h4" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"></path></svg>
</a>
    </span>
    <span data-stateful-target="state" data-state="editor:saving editor:failed" class="hidden">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" class="text-cookpad-gray-600 mise-icon mise-icon-add-attachment"><path d="M4.583 13.304a2.167 2.167 0 0 0 3.064 0L12.36 8.59c.41-.411.698-.898.862-1.416a.577.577 0 0 1 .434-.404c.347-.064.656.227.56.566a4.479 4.479 0 0 1-1.15 1.96l-4.713 4.715a3.167 3.167 0 1 1-4.479-4.479l5.438-5.437a.5.5 0 0 1 .707.707L4.583 10.24a2.167 2.167 0 0 0 0 3.064zM7.411 3.64 2.226 8.825a.5.5 0 0 1-.708-.707l5.186-5.185A4.482 4.482 0 0 1 9.46 1.635c.334-.032.566.296.47.618a.572.572 0 0 1-.486.39 3.485 3.485 0 0 0-2.034.997z" fill="currentColor"></path><path d="m11.24 7.354-4.772 4.771a.5.5 0 1 1-.707-.707l4.772-4.772a.5.5 0 1 1 .707.708z" fill="currentColor"></path><path d="M4.583 13.304a2.167 2.167 0 0 0 3.064 0L12.36 8.59c.41-.411.698-.898.862-1.416a.577.577 0 0 1 .434-.404c.347-.064.656.227.56.566a4.479 4.479 0 0 1-1.15 1.96l-4.713 4.715a3.167 3.167 0 1 1-4.479-4.479l5.438-5.437a.5.5 0 0 1 .707.707L4.583 10.24a2.167 2.167 0 0 0 0 3.064zM7.411 3.64 2.226 8.825a.5.5 0 0 1-.708-.707l5.186-5.185A4.482 4.482 0 0 1 9.46 1.635c.334-.032.566.296.47.618a.572.572 0 0 1-.486.39 3.485 3.485 0 0 0-2.034.997z" stroke="currentColor" stroke-width=".3" stroke-linecap="round" stroke-linejoin="round"></path><path d="m11.24 7.354-4.772 4.771a.5.5 0 1 1-.707-.707l4.772-4.772a.5.5 0 1 1 .707.708z" stroke="currentColor" stroke-width=".3" stroke-linecap="round" stroke-linejoin="round"></path><path d="M13.333 1.333v4M11.333 3.333h4" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"></path></svg>

    </span>
  </div>

        </div>
      <div class="pr-md editor-input box-content medium-editor-element placeholder medium-editor-placeholder" data-field="" data-field-name="quantity_and_name" data-placeholder="ไข่ 2 ฟอง" data-maxlength="200" data-editor--character-count-target="field" data-editor--delete-record-target="field" data-editor--add-ingredient-suggestion-target="field" data-action="focus->editor--character-count#showMessage focusout->editor--character-count#hideMessage keyup->editor--character-count#updateMessage focus->editor--recipe-links#showAddLink focusout->editor--recipe-links#hideAddLink" data-character-count-limit-class="border-cookpad-red-500" data-add-sibling-disabled="false" data-splittable-field="true" contenteditable="true" spellcheck="true" data-medium-editor-element="true" role="textbox" aria-multiline="true" data-medium-editor-editor-index="4" medium-editor-index="a94aff1c-a60a-51b0-78a2-deee647311bb">
      </div>
        <span class="flex flex-col items-end mt-px text-cookpad-gray-500 text-cookpad-12 invisible" data-editor--character-count-target="message" data-character-count-limit-class="text-cookpad-red-500">0/200</span>
    </div>

    <div class="-mt-rg">
        <div class="relative inline-block " data-controller="dropdown" data-dropdown-toggle-class="hidden">
              <a class="js__rich block leading-none" data-action="click->dropdown#toggle click@window->dropdown#hide" title="ดูเพิ่มเติม" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="text-cookpad-gray-400 mise-icon mise-icon-overflow-horizontal"><path d="M11 12a1 1 0 1 0 2 0 1 1 0 0 0-2 0zM18 12a1 1 0 1 0 2 0 1 1 0 0 0-2 0zM4 12a1 1 0 1 0 2 0 1 1 0 0 0-2 0z" fill="currentColor" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
</a>



  <div class="z-40 w-40 absolute right-0 hidden" data-dropdown-target="menu">
    <div class="-mt-sm mr-xs h-2 pt-xs top-px relative float-right z-10 overflow-y-hidden">
  <div class="h-3 w-3 bg-cookpad-white border border-cookpad-gray-400 transform rotate-45"></div>
</div>


    <ul class="dropdown-menu divide-y divide-cookpad-gray-400 relative z-0">
                  

            <li class="text-cookpad-16 text-cookpad-gray-700 hover:bg-cookpad-gray-200">
  
              <a class="dropdown-menu__item-link" data-action="editor--delete-record#click" href="#">
    ลบส่วนผสม
</a>

</li>
</ul>  </div>
</div>
    </div>
  </div>


</li><li id="ingredient_71025164" class="ingredient py-xs text-cookpad-16 " data-record="/th/recipes/14781680/ingredients?headline=false" data-controller="editor--delete-record editor--character-count editor--recipe-links" data-editor--delete-record-confirmation-message-value="คุณแน่ใจว่าจะลบนะคะ?">
  
  <div data-field-group="" class="flex items-center field-group">
    <div class="text-cookpad-gray-400 flex-none -mt-rg">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="cursor-move mise-icon mise-icon-move-bars ui-sortable-handle" data-behavior="handle"><path d="M21 10H3M21 6H3M21 14H3M21 18H3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>


    </div>

    <div class="flex-grow mx-sm">
        <div id="recipe_link_add_ingredient_71025164">
            <div class="float-right mt-xs mr-xs p-xs invisible" data-editor--recipe-links-target="recipeLinkAdd" data-controller="stateful" data-action="editor:saving@document->stateful#setState editor:saved@document->stateful#setState editor:failed@document->stateful#setState">
    <span data-stateful-target="state" data-state="editor:saved" class="">
      <a title="ใส่ลิงก์สูตรอื่น" data-action="source-tracking#appendVia modal#advance mousedown->editor--recipe-links#preventEditorFieldBlur" data-behavior="reference" href="/th/recipe_links/new?recipe_id=14781680&amp;source_id=71025164&amp;source_type=Ingredient&amp;target_type=Tip" class=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" class="text-cookpad-gray-600 mise-icon mise-icon-add-attachment"><path d="M4.583 13.304a2.167 2.167 0 0 0 3.064 0L12.36 8.59c.41-.411.698-.898.862-1.416a.577.577 0 0 1 .434-.404c.347-.064.656.227.56.566a4.479 4.479 0 0 1-1.15 1.96l-4.713 4.715a3.167 3.167 0 1 1-4.479-4.479l5.438-5.437a.5.5 0 0 1 .707.707L4.583 10.24a2.167 2.167 0 0 0 0 3.064zM7.411 3.64 2.226 8.825a.5.5 0 0 1-.708-.707l5.186-5.185A4.482 4.482 0 0 1 9.46 1.635c.334-.032.566.296.47.618a.572.572 0 0 1-.486.39 3.485 3.485 0 0 0-2.034.997z" fill="currentColor"></path><path d="m11.24 7.354-4.772 4.771a.5.5 0 1 1-.707-.707l4.772-4.772a.5.5 0 1 1 .707.708z" fill="currentColor"></path><path d="M4.583 13.304a2.167 2.167 0 0 0 3.064 0L12.36 8.59c.41-.411.698-.898.862-1.416a.577.577 0 0 1 .434-.404c.347-.064.656.227.56.566a4.479 4.479 0 0 1-1.15 1.96l-4.713 4.715a3.167 3.167 0 1 1-4.479-4.479l5.438-5.437a.5.5 0 0 1 .707.707L4.583 10.24a2.167 2.167 0 0 0 0 3.064zM7.411 3.64 2.226 8.825a.5.5 0 0 1-.708-.707l5.186-5.185A4.482 4.482 0 0 1 9.46 1.635c.334-.032.566.296.47.618a.572.572 0 0 1-.486.39 3.485 3.485 0 0 0-2.034.997z" stroke="currentColor" stroke-width=".3" stroke-linecap="round" stroke-linejoin="round"></path><path d="m11.24 7.354-4.772 4.771a.5.5 0 1 1-.707-.707l4.772-4.772a.5.5 0 1 1 .707.708z" stroke="currentColor" stroke-width=".3" stroke-linecap="round" stroke-linejoin="round"></path><path d="M13.333 1.333v4M11.333 3.333h4" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"></path></svg>
</a>
    </span>
    <span data-stateful-target="state" data-state="editor:saving editor:failed" class="hidden">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" class="text-cookpad-gray-600 mise-icon mise-icon-add-attachment"><path d="M4.583 13.304a2.167 2.167 0 0 0 3.064 0L12.36 8.59c.41-.411.698-.898.862-1.416a.577.577 0 0 1 .434-.404c.347-.064.656.227.56.566a4.479 4.479 0 0 1-1.15 1.96l-4.713 4.715a3.167 3.167 0 1 1-4.479-4.479l5.438-5.437a.5.5 0 0 1 .707.707L4.583 10.24a2.167 2.167 0 0 0 0 3.064zM7.411 3.64 2.226 8.825a.5.5 0 0 1-.708-.707l5.186-5.185A4.482 4.482 0 0 1 9.46 1.635c.334-.032.566.296.47.618a.572.572 0 0 1-.486.39 3.485 3.485 0 0 0-2.034.997z" fill="currentColor"></path><path d="m11.24 7.354-4.772 4.771a.5.5 0 1 1-.707-.707l4.772-4.772a.5.5 0 1 1 .707.708z" fill="currentColor"></path><path d="M4.583 13.304a2.167 2.167 0 0 0 3.064 0L12.36 8.59c.41-.411.698-.898.862-1.416a.577.577 0 0 1 .434-.404c.347-.064.656.227.56.566a4.479 4.479 0 0 1-1.15 1.96l-4.713 4.715a3.167 3.167 0 1 1-4.479-4.479l5.438-5.437a.5.5 0 0 1 .707.707L4.583 10.24a2.167 2.167 0 0 0 0 3.064zM7.411 3.64 2.226 8.825a.5.5 0 0 1-.708-.707l5.186-5.185A4.482 4.482 0 0 1 9.46 1.635c.334-.032.566.296.47.618a.572.572 0 0 1-.486.39 3.485 3.485 0 0 0-2.034.997z" stroke="currentColor" stroke-width=".3" stroke-linecap="round" stroke-linejoin="round"></path><path d="m11.24 7.354-4.772 4.771a.5.5 0 1 1-.707-.707l4.772-4.772a.5.5 0 1 1 .707.708z" stroke="currentColor" stroke-width=".3" stroke-linecap="round" stroke-linejoin="round"></path><path d="M13.333 1.333v4M11.333 3.333h4" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"></path></svg>

    </span>
  </div>

        </div>
      <div class="pr-md editor-input box-content medium-editor-element placeholder medium-editor-placeholder" data-field="" data-field-name="quantity_and_name" data-placeholder="น้ำสต็อก 100 มล." data-maxlength="200" data-editor--character-count-target="field" data-editor--delete-record-target="field" data-editor--add-ingredient-suggestion-target="field" data-action="focus->editor--character-count#showMessage focusout->editor--character-count#hideMessage keyup->editor--character-count#updateMessage focus->editor--recipe-links#showAddLink focusout->editor--recipe-links#hideAddLink" data-character-count-limit-class="border-cookpad-red-500" data-add-sibling-disabled="false" data-splittable-field="true" contenteditable="true" spellcheck="true" data-medium-editor-element="true" role="textbox" aria-multiline="true" data-medium-editor-editor-index="5" medium-editor-index="d1d97acd-303e-8fd0-7bb4-5ed3958fa3f7">
      </div>
        <span class="flex flex-col items-end mt-px text-cookpad-gray-500 text-cookpad-12 invisible" data-editor--character-count-target="message" data-character-count-limit-class="text-cookpad-red-500">0/200</span>
    </div>

    <div class="-mt-rg">
        <div class="relative inline-block " data-controller="dropdown" data-dropdown-toggle-class="hidden">
              <a class="js__rich block leading-none" data-action="click->dropdown#toggle click@window->dropdown#hide" title="ดูเพิ่มเติม" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="text-cookpad-gray-400 mise-icon mise-icon-overflow-horizontal"><path d="M11 12a1 1 0 1 0 2 0 1 1 0 0 0-2 0zM18 12a1 1 0 1 0 2 0 1 1 0 0 0-2 0zM4 12a1 1 0 1 0 2 0 1 1 0 0 0-2 0z" fill="currentColor" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
</a>



  <div class="z-40 w-40 absolute right-0 hidden" data-dropdown-target="menu">
    <div class="-mt-sm mr-xs h-2 pt-xs top-px relative float-right z-10 overflow-y-hidden">
  <div class="h-3 w-3 bg-cookpad-white border border-cookpad-gray-400 transform rotate-45"></div>
</div>


    <ul class="dropdown-menu divide-y divide-cookpad-gray-400 relative z-0">
                  

            <li class="text-cookpad-16 text-cookpad-gray-700 hover:bg-cookpad-gray-200">
  
              <a class="dropdown-menu__item-link" data-action="editor--delete-record#click" href="#">
    ลบส่วนผสม
</a>

</li>
</ul>  </div>
</div>
    </div>
  </div>


</li><li id="ingredient_71030154" class="ingredient py-xs text-cookpad-16 " data-record="/th/recipes/14781680/ingredients?headline=false" data-controller="editor--delete-record editor--character-count editor--recipe-links" data-editor--delete-record-confirmation-message-value="คุณแน่ใจว่าจะลบนะคะ?">
  
  <div data-field-group="" class="flex items-center field-group">
    <div class="text-cookpad-gray-400 flex-none -mt-rg">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="cursor-move mise-icon mise-icon-move-bars ui-sortable-handle" data-behavior="handle"><path d="M21 10H3M21 6H3M21 14H3M21 18H3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>


    </div>

    <div class="flex-grow mx-sm">
        <div id="recipe_link_add_ingredient_71030154">
            <div class="float-right mt-xs mr-xs p-xs invisible" data-editor--recipe-links-target="recipeLinkAdd" data-controller="stateful" data-action="editor:saving@document->stateful#setState editor:saved@document->stateful#setState editor:failed@document->stateful#setState">
    <span data-stateful-target="state" data-state="editor:saved" class="">
      <a title="ใส่ลิงก์สูตรอื่น" data-action="source-tracking#appendVia modal#advance mousedown->editor--recipe-links#preventEditorFieldBlur" data-behavior="reference" href="/th/recipe_links/new?recipe_id=14781680&amp;source_id=71030154&amp;source_type=Ingredient&amp;target_type=Tip" class=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" class="text-cookpad-gray-600 mise-icon mise-icon-add-attachment"><path d="M4.583 13.304a2.167 2.167 0 0 0 3.064 0L12.36 8.59c.41-.411.698-.898.862-1.416a.577.577 0 0 1 .434-.404c.347-.064.656.227.56.566a4.479 4.479 0 0 1-1.15 1.96l-4.713 4.715a3.167 3.167 0 1 1-4.479-4.479l5.438-5.437a.5.5 0 0 1 .707.707L4.583 10.24a2.167 2.167 0 0 0 0 3.064zM7.411 3.64 2.226 8.825a.5.5 0 0 1-.708-.707l5.186-5.185A4.482 4.482 0 0 1 9.46 1.635c.334-.032.566.296.47.618a.572.572 0 0 1-.486.39 3.485 3.485 0 0 0-2.034.997z" fill="currentColor"></path><path d="m11.24 7.354-4.772 4.771a.5.5 0 1 1-.707-.707l4.772-4.772a.5.5 0 1 1 .707.708z" fill="currentColor"></path><path d="M4.583 13.304a2.167 2.167 0 0 0 3.064 0L12.36 8.59c.41-.411.698-.898.862-1.416a.577.577 0 0 1 .434-.404c.347-.064.656.227.56.566a4.479 4.479 0 0 1-1.15 1.96l-4.713 4.715a3.167 3.167 0 1 1-4.479-4.479l5.438-5.437a.5.5 0 0 1 .707.707L4.583 10.24a2.167 2.167 0 0 0 0 3.064zM7.411 3.64 2.226 8.825a.5.5 0 0 1-.708-.707l5.186-5.185A4.482 4.482 0 0 1 9.46 1.635c.334-.032.566.296.47.618a.572.572 0 0 1-.486.39 3.485 3.485 0 0 0-2.034.997z" stroke="currentColor" stroke-width=".3" stroke-linecap="round" stroke-linejoin="round"></path><path d="m11.24 7.354-4.772 4.771a.5.5 0 1 1-.707-.707l4.772-4.772a.5.5 0 1 1 .707.708z" stroke="currentColor" stroke-width=".3" stroke-linecap="round" stroke-linejoin="round"></path><path d="M13.333 1.333v4M11.333 3.333h4" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"></path></svg>
</a>
    </span>
    <span data-stateful-target="state" data-state="editor:saving editor:failed" class="hidden">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" class="text-cookpad-gray-600 mise-icon mise-icon-add-attachment"><path d="M4.583 13.304a2.167 2.167 0 0 0 3.064 0L12.36 8.59c.41-.411.698-.898.862-1.416a.577.577 0 0 1 .434-.404c.347-.064.656.227.56.566a4.479 4.479 0 0 1-1.15 1.96l-4.713 4.715a3.167 3.167 0 1 1-4.479-4.479l5.438-5.437a.5.5 0 0 1 .707.707L4.583 10.24a2.167 2.167 0 0 0 0 3.064zM7.411 3.64 2.226 8.825a.5.5 0 0 1-.708-.707l5.186-5.185A4.482 4.482 0 0 1 9.46 1.635c.334-.032.566.296.47.618a.572.572 0 0 1-.486.39 3.485 3.485 0 0 0-2.034.997z" fill="currentColor"></path><path d="m11.24 7.354-4.772 4.771a.5.5 0 1 1-.707-.707l4.772-4.772a.5.5 0 1 1 .707.708z" fill="currentColor"></path><path d="M4.583 13.304a2.167 2.167 0 0 0 3.064 0L12.36 8.59c.41-.411.698-.898.862-1.416a.577.577 0 0 1 .434-.404c.347-.064.656.227.56.566a4.479 4.479 0 0 1-1.15 1.96l-4.713 4.715a3.167 3.167 0 1 1-4.479-4.479l5.438-5.437a.5.5 0 0 1 .707.707L4.583 10.24a2.167 2.167 0 0 0 0 3.064zM7.411 3.64 2.226 8.825a.5.5 0 0 1-.708-.707l5.186-5.185A4.482 4.482 0 0 1 9.46 1.635c.334-.032.566.296.47.618a.572.572 0 0 1-.486.39 3.485 3.485 0 0 0-2.034.997z" stroke="currentColor" stroke-width=".3" stroke-linecap="round" stroke-linejoin="round"></path><path d="m11.24 7.354-4.772 4.771a.5.5 0 1 1-.707-.707l4.772-4.772a.5.5 0 1 1 .707.708z" stroke="currentColor" stroke-width=".3" stroke-linecap="round" stroke-linejoin="round"></path><path d="M13.333 1.333v4M11.333 3.333h4" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"></path></svg>

    </span>
  </div>

        </div>
      <div class="pr-md editor-input box-content medium-editor-element medium-editor-placeholder placeholder" data-field="" data-field-name="quantity_and_name" data-placeholder="ไข่ 2 ฟอง" data-maxlength="200" data-editor--character-count-target="field" data-editor--delete-record-target="field" data-editor--add-ingredient-suggestion-target="field" data-action="focus->editor--character-count#showMessage focusout->editor--character-count#hideMessage keyup->editor--character-count#updateMessage focus->editor--recipe-links#showAddLink focusout->editor--recipe-links#hideAddLink" data-character-count-limit-class="border-cookpad-red-500" data-add-sibling-disabled="false" data-splittable-field="true" contenteditable="true" spellcheck="true" data-medium-editor-element="true" role="textbox" aria-multiline="true" data-medium-editor-editor-index="6" medium-editor-index="95fff324-9b46-dbba-c117-531538c4a45c">
      </div>
        <span class="flex flex-col items-end mt-px text-cookpad-gray-500 text-cookpad-12 invisible" data-editor--character-count-target="message" data-character-count-limit-class="text-cookpad-red-500">0/0</span>
    </div>

    <div class="-mt-rg">
        <div class="relative inline-block " data-controller="dropdown" data-dropdown-toggle-class="hidden">
              <a class="js__rich block leading-none" data-action="click->dropdown#toggle click@window->dropdown#hide" title="ดูเพิ่มเติม" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="text-cookpad-gray-400 mise-icon mise-icon-overflow-horizontal"><path d="M11 12a1 1 0 1 0 2 0 1 1 0 0 0-2 0zM18 12a1 1 0 1 0 2 0 1 1 0 0 0-2 0zM4 12a1 1 0 1 0 2 0 1 1 0 0 0-2 0z" fill="currentColor" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
</a>



  <div class="z-40 w-40 absolute right-0 hidden" data-dropdown-target="menu">
    <div class="-mt-sm mr-xs h-2 pt-xs top-px relative float-right z-10 overflow-y-hidden">
  <div class="h-3 w-3 bg-cookpad-white border border-cookpad-gray-400 transform rotate-45"></div>
</div>


    <ul class="dropdown-menu divide-y divide-cookpad-gray-400 relative z-0">
                  

            <li class="text-cookpad-16 text-cookpad-gray-700 hover:bg-cookpad-gray-200">
  
              <a class="dropdown-menu__item-link" data-action="editor--delete-record#click" href="#">
    ลบส่วนผสม
</a>

</li>
</ul>  </div>
</div>
    </div>
  </div>


</li><li id="ingredient_71030155" class="ingredient py-xs text-cookpad-16 mt-rg -mb-px text-cookpad-gray-500" data-record="/th/recipes/14781680/ingredients?headline=true" data-controller="editor--delete-record editor--character-count editor--recipe-links" data-editor--delete-record-confirmation-message-value="คุณแน่ใจว่าจะลบนะคะ?">
  
  <div data-field-group="" class="flex items-center field-group">
    <div class="text-cookpad-gray-400 flex-none -mt-rg">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="cursor-move mise-icon mise-icon-move-bars ui-sortable-handle" data-behavior="handle"><path d="M21 10H3M21 6H3M21 14H3M21 18H3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>


    </div>

    <div class="flex-grow mx-sm">
      <div class="pr-md editor-input box-content border-b border-cookpad-gray-400 rounded-b-none font-semibold medium-editor-element medium-editor-placeholder placeholder" data-field="" data-field-name="quantity_and_name" data-placeholder="แบ่งหัวข้อ" data-maxlength="200" data-editor--character-count-target="field" data-editor--delete-record-target="field" data-editor--add-ingredient-suggestion-target="field" data-action="focus->editor--character-count#showMessage focusout->editor--character-count#hideMessage keyup->editor--character-count#updateMessage focus->editor--recipe-links#showAddLink focusout->editor--recipe-links#hideAddLink" data-character-count-limit-class="border-cookpad-red-500" data-add-sibling-disabled="true" data-splittable-field="true" contenteditable="true" spellcheck="true" data-medium-editor-element="true" role="textbox" aria-multiline="true" data-medium-editor-editor-index="7" medium-editor-index="92cf52b7-5c22-1161-0d56-7ddd1542691a">
      </div>
        <span class="flex flex-col items-end mt-px text-cookpad-gray-500 text-cookpad-12 invisible" data-editor--character-count-target="message" data-character-count-limit-class="text-cookpad-red-500">0/0</span>
    </div>

    <div class="-mt-rg">
        <div class="relative inline-block " data-controller="dropdown" data-dropdown-toggle-class="hidden">
              <a class="js__rich block leading-none" data-action="click->dropdown#toggle click@window->dropdown#hide" title="ดูเพิ่มเติม" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="text-cookpad-gray-400 mise-icon mise-icon-overflow-horizontal"><path d="M11 12a1 1 0 1 0 2 0 1 1 0 0 0-2 0zM18 12a1 1 0 1 0 2 0 1 1 0 0 0-2 0zM4 12a1 1 0 1 0 2 0 1 1 0 0 0-2 0z" fill="currentColor" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
</a>



  <div class="z-40 w-40 absolute right-0 hidden" data-dropdown-target="menu">
    <div class="-mt-sm mr-xs h-2 pt-xs top-px relative float-right z-10 overflow-y-hidden">
  <div class="h-3 w-3 bg-cookpad-white border border-cookpad-gray-400 transform rotate-45"></div>
</div>


    <ul class="dropdown-menu divide-y divide-cookpad-gray-400 relative z-0">
                  

            <li class="text-cookpad-16 text-cookpad-gray-700 hover:bg-cookpad-gray-200">
  
              <a class="dropdown-menu__item-link" data-action="editor--delete-record#click" href="#">
    ลบหัวข้อส่วนผสมนี้
</a>

</li>
</ul>  </div>
</div>
    </div>
  </div>


</li><li id="ingredient_71030175" class="ingredient py-xs text-cookpad-16 " data-record="/th/recipes/14781680/ingredients?headline=false" data-controller="editor--delete-record editor--character-count editor--recipe-links" data-editor--delete-record-confirmation-message-value="คุณแน่ใจว่าจะลบนะคะ?">
  
  <div data-field-group="" class="flex items-center field-group">
    <div class="text-cookpad-gray-400 flex-none -mt-rg">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="cursor-move mise-icon mise-icon-move-bars ui-sortable-handle" data-behavior="handle"><path d="M21 10H3M21 6H3M21 14H3M21 18H3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>


    </div>

    <div class="flex-grow mx-sm">
        <div id="recipe_link_add_ingredient_71030175">
            <div class="float-right mt-xs mr-xs p-xs invisible" data-editor--recipe-links-target="recipeLinkAdd" data-controller="stateful" data-action="editor:saving@document->stateful#setState editor:saved@document->stateful#setState editor:failed@document->stateful#setState">
    <span data-stateful-target="state" data-state="editor:saved" class="">
      <a title="ใส่ลิงก์สูตรอื่น" data-action="source-tracking#appendVia modal#advance mousedown->editor--recipe-links#preventEditorFieldBlur" data-behavior="reference" href="/th/recipe_links/new?recipe_id=14781680&amp;source_id=71030175&amp;source_type=Ingredient&amp;target_type=Tip" class=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" class="text-cookpad-gray-600 mise-icon mise-icon-add-attachment"><path d="M4.583 13.304a2.167 2.167 0 0 0 3.064 0L12.36 8.59c.41-.411.698-.898.862-1.416a.577.577 0 0 1 .434-.404c.347-.064.656.227.56.566a4.479 4.479 0 0 1-1.15 1.96l-4.713 4.715a3.167 3.167 0 1 1-4.479-4.479l5.438-5.437a.5.5 0 0 1 .707.707L4.583 10.24a2.167 2.167 0 0 0 0 3.064zM7.411 3.64 2.226 8.825a.5.5 0 0 1-.708-.707l5.186-5.185A4.482 4.482 0 0 1 9.46 1.635c.334-.032.566.296.47.618a.572.572 0 0 1-.486.39 3.485 3.485 0 0 0-2.034.997z" fill="currentColor"></path><path d="m11.24 7.354-4.772 4.771a.5.5 0 1 1-.707-.707l4.772-4.772a.5.5 0 1 1 .707.708z" fill="currentColor"></path><path d="M4.583 13.304a2.167 2.167 0 0 0 3.064 0L12.36 8.59c.41-.411.698-.898.862-1.416a.577.577 0 0 1 .434-.404c.347-.064.656.227.56.566a4.479 4.479 0 0 1-1.15 1.96l-4.713 4.715a3.167 3.167 0 1 1-4.479-4.479l5.438-5.437a.5.5 0 0 1 .707.707L4.583 10.24a2.167 2.167 0 0 0 0 3.064zM7.411 3.64 2.226 8.825a.5.5 0 0 1-.708-.707l5.186-5.185A4.482 4.482 0 0 1 9.46 1.635c.334-.032.566.296.47.618a.572.572 0 0 1-.486.39 3.485 3.485 0 0 0-2.034.997z" stroke="currentColor" stroke-width=".3" stroke-linecap="round" stroke-linejoin="round"></path><path d="m11.24 7.354-4.772 4.771a.5.5 0 1 1-.707-.707l4.772-4.772a.5.5 0 1 1 .707.708z" stroke="currentColor" stroke-width=".3" stroke-linecap="round" stroke-linejoin="round"></path><path d="M13.333 1.333v4M11.333 3.333h4" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"></path></svg>
</a>
    </span>
    <span data-stateful-target="state" data-state="editor:saving editor:failed" class="hidden">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" class="text-cookpad-gray-600 mise-icon mise-icon-add-attachment"><path d="M4.583 13.304a2.167 2.167 0 0 0 3.064 0L12.36 8.59c.41-.411.698-.898.862-1.416a.577.577 0 0 1 .434-.404c.347-.064.656.227.56.566a4.479 4.479 0 0 1-1.15 1.96l-4.713 4.715a3.167 3.167 0 1 1-4.479-4.479l5.438-5.437a.5.5 0 0 1 .707.707L4.583 10.24a2.167 2.167 0 0 0 0 3.064zM7.411 3.64 2.226 8.825a.5.5 0 0 1-.708-.707l5.186-5.185A4.482 4.482 0 0 1 9.46 1.635c.334-.032.566.296.47.618a.572.572 0 0 1-.486.39 3.485 3.485 0 0 0-2.034.997z" fill="currentColor"></path><path d="m11.24 7.354-4.772 4.771a.5.5 0 1 1-.707-.707l4.772-4.772a.5.5 0 1 1 .707.708z" fill="currentColor"></path><path d="M4.583 13.304a2.167 2.167 0 0 0 3.064 0L12.36 8.59c.41-.411.698-.898.862-1.416a.577.577 0 0 1 .434-.404c.347-.064.656.227.56.566a4.479 4.479 0 0 1-1.15 1.96l-4.713 4.715a3.167 3.167 0 1 1-4.479-4.479l5.438-5.437a.5.5 0 0 1 .707.707L4.583 10.24a2.167 2.167 0 0 0 0 3.064zM7.411 3.64 2.226 8.825a.5.5 0 0 1-.708-.707l5.186-5.185A4.482 4.482 0 0 1 9.46 1.635c.334-.032.566.296.47.618a.572.572 0 0 1-.486.39 3.485 3.485 0 0 0-2.034.997z" stroke="currentColor" stroke-width=".3" stroke-linecap="round" stroke-linejoin="round"></path><path d="m11.24 7.354-4.772 4.771a.5.5 0 1 1-.707-.707l4.772-4.772a.5.5 0 1 1 .707.708z" stroke="currentColor" stroke-width=".3" stroke-linecap="round" stroke-linejoin="round"></path><path d="M13.333 1.333v4M11.333 3.333h4" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"></path></svg>

    </span>
  </div>

        </div>
      <div class="pr-md editor-input box-content medium-editor-element medium-editor-placeholder placeholder" data-field="" data-field-name="quantity_and_name" data-placeholder="ไข่ 2 ฟอง" data-maxlength="200" data-editor--character-count-target="field" data-editor--delete-record-target="field" data-editor--add-ingredient-suggestion-target="field" data-action="focus->editor--character-count#showMessage focusout->editor--character-count#hideMessage keyup->editor--character-count#updateMessage focus->editor--recipe-links#showAddLink focusout->editor--recipe-links#hideAddLink" data-character-count-limit-class="border-cookpad-red-500" data-add-sibling-disabled="false" data-splittable-field="true" contenteditable="true" spellcheck="true" data-medium-editor-element="true" role="textbox" aria-multiline="true" data-medium-editor-editor-index="8" medium-editor-index="b3b6a6c7-f9f2-d3af-4f72-0d904dcefe07">
      </div>
        <span class="flex flex-col items-end mt-px text-cookpad-gray-500 text-cookpad-12 invisible" data-editor--character-count-target="message" data-character-count-limit-class="text-cookpad-red-500">0/0</span>
    </div>

    <div class="-mt-rg">
        <div class="relative inline-block " data-controller="dropdown" data-dropdown-toggle-class="hidden">
              <a class="js__rich block leading-none" data-action="click->dropdown#toggle click@window->dropdown#hide" title="ดูเพิ่มเติม" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="text-cookpad-gray-400 mise-icon mise-icon-overflow-horizontal"><path d="M11 12a1 1 0 1 0 2 0 1 1 0 0 0-2 0zM18 12a1 1 0 1 0 2 0 1 1 0 0 0-2 0zM4 12a1 1 0 1 0 2 0 1 1 0 0 0-2 0z" fill="currentColor" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
</a>



  <div class="z-40 w-40 absolute right-0 hidden" data-dropdown-target="menu">
    <div class="-mt-sm mr-xs h-2 pt-xs top-px relative float-right z-10 overflow-y-hidden">
  <div class="h-3 w-3 bg-cookpad-white border border-cookpad-gray-400 transform rotate-45"></div>
</div>


    <ul class="dropdown-menu divide-y divide-cookpad-gray-400 relative z-0">
                  

            <li class="text-cookpad-16 text-cookpad-gray-700 hover:bg-cookpad-gray-200">
  
              <a class="dropdown-menu__item-link" data-action="editor--delete-record#click" href="#">
    ลบส่วนผสม
</a>

</li>
</ul>  </div>
</div>
    </div>
  </div>


</li><li id="ingredient_71030176" class="ingredient py-xs text-cookpad-16 mt-rg -mb-px text-cookpad-gray-500" data-record="/th/recipes/14781680/ingredients?headline=true" data-controller="editor--delete-record editor--character-count editor--recipe-links" data-editor--delete-record-confirmation-message-value="คุณแน่ใจว่าจะลบนะคะ?">
  
  <div data-field-group="" class="flex items-center field-group">
    <div class="text-cookpad-gray-400 flex-none -mt-rg">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="cursor-move mise-icon mise-icon-move-bars ui-sortable-handle" data-behavior="handle"><path d="M21 10H3M21 6H3M21 14H3M21 18H3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>


    </div>

    <div class="flex-grow mx-sm">
      <div class="pr-md editor-input box-content border-b border-cookpad-gray-400 rounded-b-none font-semibold medium-editor-element medium-editor-placeholder placeholder" data-field="" data-field-name="quantity_and_name" data-placeholder="แบ่งหัวข้อ" data-maxlength="200" data-editor--character-count-target="field" data-editor--delete-record-target="field" data-editor--add-ingredient-suggestion-target="field" data-action="focus->editor--character-count#showMessage focusout->editor--character-count#hideMessage keyup->editor--character-count#updateMessage focus->editor--recipe-links#showAddLink focusout->editor--recipe-links#hideAddLink" data-character-count-limit-class="border-cookpad-red-500" data-add-sibling-disabled="true" data-splittable-field="true" contenteditable="true" spellcheck="true" data-medium-editor-element="true" role="textbox" aria-multiline="true" data-medium-editor-editor-index="9" medium-editor-index="36cc8a02-2cde-1ac7-0902-3d2ad534dccb">
      </div>
        <span class="flex flex-col items-end mt-px text-cookpad-gray-500 text-cookpad-12 invisible" data-editor--character-count-target="message" data-character-count-limit-class="text-cookpad-red-500">0/0</span>
    </div>

    <div class="-mt-rg">
        <div class="relative inline-block " data-controller="dropdown" data-dropdown-toggle-class="hidden">
              <a class="js__rich block leading-none" data-action="click->dropdown#toggle click@window->dropdown#hide" title="ดูเพิ่มเติม" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="text-cookpad-gray-400 mise-icon mise-icon-overflow-horizontal"><path d="M11 12a1 1 0 1 0 2 0 1 1 0 0 0-2 0zM18 12a1 1 0 1 0 2 0 1 1 0 0 0-2 0zM4 12a1 1 0 1 0 2 0 1 1 0 0 0-2 0z" fill="currentColor" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
</a>



  <div class="z-40 w-40 absolute right-0 hidden" data-dropdown-target="menu">
    <div class="-mt-sm mr-xs h-2 pt-xs top-px relative float-right z-10 overflow-y-hidden">
  <div class="h-3 w-3 bg-cookpad-white border border-cookpad-gray-400 transform rotate-45"></div>
</div>


    <ul class="dropdown-menu divide-y divide-cookpad-gray-400 relative z-0">
                  

            <li class="text-cookpad-16 text-cookpad-gray-700 hover:bg-cookpad-gray-200">
  
              <a class="dropdown-menu__item-link" data-action="editor--delete-record#click" href="#">
    ลบหัวข้อส่วนผสมนี้
</a>

</li>
</ul>  </div>
</div>
    </div>
  </div>


</li><li id="ingredient_71030184" class="ingredient py-xs text-cookpad-16 " data-record="/th/recipes/14781680/ingredients?headline=false" data-controller="editor--delete-record editor--character-count editor--recipe-links" data-editor--delete-record-confirmation-message-value="คุณแน่ใจว่าจะลบนะคะ?">
  
  <div data-field-group="" class="flex items-center field-group">
    <div class="text-cookpad-gray-400 flex-none -mt-rg">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="cursor-move mise-icon mise-icon-move-bars ui-sortable-handle" data-behavior="handle"><path d="M21 10H3M21 6H3M21 14H3M21 18H3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>


    </div>

    <div class="flex-grow mx-sm">
        <div id="recipe_link_add_ingredient_71030184">
            <div class="float-right mt-xs mr-xs p-xs invisible" data-editor--recipe-links-target="recipeLinkAdd" data-controller="stateful" data-action="editor:saving@document->stateful#setState editor:saved@document->stateful#setState editor:failed@document->stateful#setState">
    <span data-stateful-target="state" data-state="editor:saved" class="">
      <a title="ใส่ลิงก์สูตรอื่น" data-action="source-tracking#appendVia modal#advance mousedown->editor--recipe-links#preventEditorFieldBlur" data-behavior="reference" href="/th/recipe_links/new?recipe_id=14781680&amp;source_id=71030184&amp;source_type=Ingredient&amp;target_type=Tip" class=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" class="text-cookpad-gray-600 mise-icon mise-icon-add-attachment"><path d="M4.583 13.304a2.167 2.167 0 0 0 3.064 0L12.36 8.59c.41-.411.698-.898.862-1.416a.577.577 0 0 1 .434-.404c.347-.064.656.227.56.566a4.479 4.479 0 0 1-1.15 1.96l-4.713 4.715a3.167 3.167 0 1 1-4.479-4.479l5.438-5.437a.5.5 0 0 1 .707.707L4.583 10.24a2.167 2.167 0 0 0 0 3.064zM7.411 3.64 2.226 8.825a.5.5 0 0 1-.708-.707l5.186-5.185A4.482 4.482 0 0 1 9.46 1.635c.334-.032.566.296.47.618a.572.572 0 0 1-.486.39 3.485 3.485 0 0 0-2.034.997z" fill="currentColor"></path><path d="m11.24 7.354-4.772 4.771a.5.5 0 1 1-.707-.707l4.772-4.772a.5.5 0 1 1 .707.708z" fill="currentColor"></path><path d="M4.583 13.304a2.167 2.167 0 0 0 3.064 0L12.36 8.59c.41-.411.698-.898.862-1.416a.577.577 0 0 1 .434-.404c.347-.064.656.227.56.566a4.479 4.479 0 0 1-1.15 1.96l-4.713 4.715a3.167 3.167 0 1 1-4.479-4.479l5.438-5.437a.5.5 0 0 1 .707.707L4.583 10.24a2.167 2.167 0 0 0 0 3.064zM7.411 3.64 2.226 8.825a.5.5 0 0 1-.708-.707l5.186-5.185A4.482 4.482 0 0 1 9.46 1.635c.334-.032.566.296.47.618a.572.572 0 0 1-.486.39 3.485 3.485 0 0 0-2.034.997z" stroke="currentColor" stroke-width=".3" stroke-linecap="round" stroke-linejoin="round"></path><path d="m11.24 7.354-4.772 4.771a.5.5 0 1 1-.707-.707l4.772-4.772a.5.5 0 1 1 .707.708z" stroke="currentColor" stroke-width=".3" stroke-linecap="round" stroke-linejoin="round"></path><path d="M13.333 1.333v4M11.333 3.333h4" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"></path></svg>
</a>
    </span>
    <span data-stateful-target="state" data-state="editor:saving editor:failed" class="hidden">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" class="text-cookpad-gray-600 mise-icon mise-icon-add-attachment"><path d="M4.583 13.304a2.167 2.167 0 0 0 3.064 0L12.36 8.59c.41-.411.698-.898.862-1.416a.577.577 0 0 1 .434-.404c.347-.064.656.227.56.566a4.479 4.479 0 0 1-1.15 1.96l-4.713 4.715a3.167 3.167 0 1 1-4.479-4.479l5.438-5.437a.5.5 0 0 1 .707.707L4.583 10.24a2.167 2.167 0 0 0 0 3.064zM7.411 3.64 2.226 8.825a.5.5 0 0 1-.708-.707l5.186-5.185A4.482 4.482 0 0 1 9.46 1.635c.334-.032.566.296.47.618a.572.572 0 0 1-.486.39 3.485 3.485 0 0 0-2.034.997z" fill="currentColor"></path><path d="m11.24 7.354-4.772 4.771a.5.5 0 1 1-.707-.707l4.772-4.772a.5.5 0 1 1 .707.708z" fill="currentColor"></path><path d="M4.583 13.304a2.167 2.167 0 0 0 3.064 0L12.36 8.59c.41-.411.698-.898.862-1.416a.577.577 0 0 1 .434-.404c.347-.064.656.227.56.566a4.479 4.479 0 0 1-1.15 1.96l-4.713 4.715a3.167 3.167 0 1 1-4.479-4.479l5.438-5.437a.5.5 0 0 1 .707.707L4.583 10.24a2.167 2.167 0 0 0 0 3.064zM7.411 3.64 2.226 8.825a.5.5 0 0 1-.708-.707l5.186-5.185A4.482 4.482 0 0 1 9.46 1.635c.334-.032.566.296.47.618a.572.572 0 0 1-.486.39 3.485 3.485 0 0 0-2.034.997z" stroke="currentColor" stroke-width=".3" stroke-linecap="round" stroke-linejoin="round"></path><path d="m11.24 7.354-4.772 4.771a.5.5 0 1 1-.707-.707l4.772-4.772a.5.5 0 1 1 .707.708z" stroke="currentColor" stroke-width=".3" stroke-linecap="round" stroke-linejoin="round"></path><path d="M13.333 1.333v4M11.333 3.333h4" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"></path></svg>

    </span>
  </div>

        </div>
      <div class="pr-md editor-input box-content medium-editor-element medium-editor-placeholder placeholder" data-field="" data-field-name="quantity_and_name" data-placeholder="ไข่ 2 ฟอง" data-maxlength="200" data-editor--character-count-target="field" data-editor--delete-record-target="field" data-editor--add-ingredient-suggestion-target="field" data-action="focus->editor--character-count#showMessage focusout->editor--character-count#hideMessage keyup->editor--character-count#updateMessage focus->editor--recipe-links#showAddLink focusout->editor--recipe-links#hideAddLink" data-character-count-limit-class="border-cookpad-red-500" data-add-sibling-disabled="false" data-splittable-field="true" contenteditable="true" spellcheck="true" data-medium-editor-element="true" role="textbox" aria-multiline="true" data-medium-editor-editor-index="10" medium-editor-index="cb144507-13ec-d046-d628-5671d032f182">
      </div>
        <span class="flex flex-col items-end mt-px text-cookpad-gray-500 text-cookpad-12 invisible" data-editor--character-count-target="message" data-character-count-limit-class="text-cookpad-red-500">0/0</span>
    </div>

    <div class="-mt-rg">
        <div class="relative inline-block " data-controller="dropdown" data-dropdown-toggle-class="hidden">
              <a class="js__rich block leading-none" data-action="click->dropdown#toggle click@window->dropdown#hide" title="ดูเพิ่มเติม" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="text-cookpad-gray-400 mise-icon mise-icon-overflow-horizontal"><path d="M11 12a1 1 0 1 0 2 0 1 1 0 0 0-2 0zM18 12a1 1 0 1 0 2 0 1 1 0 0 0-2 0zM4 12a1 1 0 1 0 2 0 1 1 0 0 0-2 0z" fill="currentColor" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
</a>



  <div class="z-40 w-40 absolute right-0 hidden" data-dropdown-target="menu">
    <div class="-mt-sm mr-xs h-2 pt-xs top-px relative float-right z-10 overflow-y-hidden">
  <div class="h-3 w-3 bg-cookpad-white border border-cookpad-gray-400 transform rotate-45"></div>
</div>


    <ul class="dropdown-menu divide-y divide-cookpad-gray-400 relative z-0">
                  

            <li class="text-cookpad-16 text-cookpad-gray-700 hover:bg-cookpad-gray-200">
  
              <a class="dropdown-menu__item-link" data-action="editor--delete-record#click" href="#">
    ลบส่วนผสม
</a>

</li>
</ul>  </div>
</div>
    </div>
  </div>


</li><li id="ingredient_71030185" class="ingredient py-xs text-cookpad-16 " data-record="/th/recipes/14781680/ingredients?headline=false" data-controller="editor--delete-record editor--character-count editor--recipe-links" data-editor--delete-record-confirmation-message-value="คุณแน่ใจว่าจะลบนะคะ?">
  
  <div data-field-group="" class="flex items-center field-group">
    <div class="text-cookpad-gray-400 flex-none -mt-rg">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="cursor-move mise-icon mise-icon-move-bars ui-sortable-handle" data-behavior="handle"><path d="M21 10H3M21 6H3M21 14H3M21 18H3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>


    </div>

    <div class="flex-grow mx-sm">
        <div id="recipe_link_add_ingredient_71030185">
            <div class="float-right mt-xs mr-xs p-xs invisible" data-editor--recipe-links-target="recipeLinkAdd" data-controller="stateful" data-action="editor:saving@document->stateful#setState editor:saved@document->stateful#setState editor:failed@document->stateful#setState">
    <span data-stateful-target="state" data-state="editor:saved" class="">
      <a title="ใส่ลิงก์สูตรอื่น" data-action="source-tracking#appendVia modal#advance mousedown->editor--recipe-links#preventEditorFieldBlur" data-behavior="reference" href="/th/recipe_links/new?recipe_id=14781680&amp;source_id=71030185&amp;source_type=Ingredient&amp;target_type=Tip" class=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" class="text-cookpad-gray-600 mise-icon mise-icon-add-attachment"><path d="M4.583 13.304a2.167 2.167 0 0 0 3.064 0L12.36 8.59c.41-.411.698-.898.862-1.416a.577.577 0 0 1 .434-.404c.347-.064.656.227.56.566a4.479 4.479 0 0 1-1.15 1.96l-4.713 4.715a3.167 3.167 0 1 1-4.479-4.479l5.438-5.437a.5.5 0 0 1 .707.707L4.583 10.24a2.167 2.167 0 0 0 0 3.064zM7.411 3.64 2.226 8.825a.5.5 0 0 1-.708-.707l5.186-5.185A4.482 4.482 0 0 1 9.46 1.635c.334-.032.566.296.47.618a.572.572 0 0 1-.486.39 3.485 3.485 0 0 0-2.034.997z" fill="currentColor"></path><path d="m11.24 7.354-4.772 4.771a.5.5 0 1 1-.707-.707l4.772-4.772a.5.5 0 1 1 .707.708z" fill="currentColor"></path><path d="M4.583 13.304a2.167 2.167 0 0 0 3.064 0L12.36 8.59c.41-.411.698-.898.862-1.416a.577.577 0 0 1 .434-.404c.347-.064.656.227.56.566a4.479 4.479 0 0 1-1.15 1.96l-4.713 4.715a3.167 3.167 0 1 1-4.479-4.479l5.438-5.437a.5.5 0 0 1 .707.707L4.583 10.24a2.167 2.167 0 0 0 0 3.064zM7.411 3.64 2.226 8.825a.5.5 0 0 1-.708-.707l5.186-5.185A4.482 4.482 0 0 1 9.46 1.635c.334-.032.566.296.47.618a.572.572 0 0 1-.486.39 3.485 3.485 0 0 0-2.034.997z" stroke="currentColor" stroke-width=".3" stroke-linecap="round" stroke-linejoin="round"></path><path d="m11.24 7.354-4.772 4.771a.5.5 0 1 1-.707-.707l4.772-4.772a.5.5 0 1 1 .707.708z" stroke="currentColor" stroke-width=".3" stroke-linecap="round" stroke-linejoin="round"></path><path d="M13.333 1.333v4M11.333 3.333h4" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"></path></svg>
</a>
    </span>
    <span data-stateful-target="state" data-state="editor:saving editor:failed" class="hidden">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" class="text-cookpad-gray-600 mise-icon mise-icon-add-attachment"><path d="M4.583 13.304a2.167 2.167 0 0 0 3.064 0L12.36 8.59c.41-.411.698-.898.862-1.416a.577.577 0 0 1 .434-.404c.347-.064.656.227.56.566a4.479 4.479 0 0 1-1.15 1.96l-4.713 4.715a3.167 3.167 0 1 1-4.479-4.479l5.438-5.437a.5.5 0 0 1 .707.707L4.583 10.24a2.167 2.167 0 0 0 0 3.064zM7.411 3.64 2.226 8.825a.5.5 0 0 1-.708-.707l5.186-5.185A4.482 4.482 0 0 1 9.46 1.635c.334-.032.566.296.47.618a.572.572 0 0 1-.486.39 3.485 3.485 0 0 0-2.034.997z" fill="currentColor"></path><path d="m11.24 7.354-4.772 4.771a.5.5 0 1 1-.707-.707l4.772-4.772a.5.5 0 1 1 .707.708z" fill="currentColor"></path><path d="M4.583 13.304a2.167 2.167 0 0 0 3.064 0L12.36 8.59c.41-.411.698-.898.862-1.416a.577.577 0 0 1 .434-.404c.347-.064.656.227.56.566a4.479 4.479 0 0 1-1.15 1.96l-4.713 4.715a3.167 3.167 0 1 1-4.479-4.479l5.438-5.437a.5.5 0 0 1 .707.707L4.583 10.24a2.167 2.167 0 0 0 0 3.064zM7.411 3.64 2.226 8.825a.5.5 0 0 1-.708-.707l5.186-5.185A4.482 4.482 0 0 1 9.46 1.635c.334-.032.566.296.47.618a.572.572 0 0 1-.486.39 3.485 3.485 0 0 0-2.034.997z" stroke="currentColor" stroke-width=".3" stroke-linecap="round" stroke-linejoin="round"></path><path d="m11.24 7.354-4.772 4.771a.5.5 0 1 1-.707-.707l4.772-4.772a.5.5 0 1 1 .707.708z" stroke="currentColor" stroke-width=".3" stroke-linecap="round" stroke-linejoin="round"></path><path d="M13.333 1.333v4M11.333 3.333h4" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"></path></svg>

    </span>
  </div>

        </div>
      <div class="pr-md editor-input box-content medium-editor-element medium-editor-placeholder placeholder" data-field="" data-field-name="quantity_and_name" data-placeholder="ไข่ 2 ฟอง" data-maxlength="200" data-editor--character-count-target="field" data-editor--delete-record-target="field" data-editor--add-ingredient-suggestion-target="field" data-action="focus->editor--character-count#showMessage focusout->editor--character-count#hideMessage keyup->editor--character-count#updateMessage focus->editor--recipe-links#showAddLink focusout->editor--recipe-links#hideAddLink" data-character-count-limit-class="border-cookpad-red-500" data-add-sibling-disabled="false" data-splittable-field="true" contenteditable="true" spellcheck="true" data-medium-editor-element="true" role="textbox" aria-multiline="true" data-medium-editor-editor-index="11" medium-editor-index="01cbf74c-6e88-124f-a560-e08486999ed8">
      </div>
        <span class="flex flex-col items-end mt-px text-cookpad-gray-500 text-cookpad-12 invisible" data-editor--character-count-target="message" data-character-count-limit-class="text-cookpad-red-500">0/0</span>
    </div>

    <div class="-mt-rg">
        <div class="relative inline-block " data-controller="dropdown" data-dropdown-toggle-class="hidden">
              <a class="js__rich block leading-none" data-action="click->dropdown#toggle click@window->dropdown#hide" title="ดูเพิ่มเติม" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="text-cookpad-gray-400 mise-icon mise-icon-overflow-horizontal"><path d="M11 12a1 1 0 1 0 2 0 1 1 0 0 0-2 0zM18 12a1 1 0 1 0 2 0 1 1 0 0 0-2 0zM4 12a1 1 0 1 0 2 0 1 1 0 0 0-2 0z" fill="currentColor" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
</a>



  <div class="z-40 w-40 absolute right-0 hidden" data-dropdown-target="menu">
    <div class="-mt-sm mr-xs h-2 pt-xs top-px relative float-right z-10 overflow-y-hidden">
  <div class="h-3 w-3 bg-cookpad-white border border-cookpad-gray-400 transform rotate-45"></div>
</div>


    <ul class="dropdown-menu divide-y divide-cookpad-gray-400 relative z-0">
                  

            <li class="text-cookpad-16 text-cookpad-gray-700 hover:bg-cookpad-gray-200">
  
              <a class="dropdown-menu__item-link" data-action="editor--delete-record#click" href="#">
    ลบส่วนผสม
</a>

</li>
</ul>  </div>
</div>
    </div>
  </div>


</li><li id="ingredient_71030190" class="ingredient py-xs text-cookpad-16 " data-record="/th/recipes/14781680/ingredients?headline=false" data-controller="editor--delete-record editor--character-count editor--recipe-links" data-editor--delete-record-confirmation-message-value="คุณแน่ใจว่าจะลบนะคะ?">
  
  <div data-field-group="" class="flex items-center field-group">
    <div class="text-cookpad-gray-400 flex-none -mt-rg">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="cursor-move mise-icon mise-icon-move-bars ui-sortable-handle" data-behavior="handle"><path d="M21 10H3M21 6H3M21 14H3M21 18H3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>


    </div>

    <div class="flex-grow mx-sm">
        <div id="recipe_link_add_ingredient_71030190">
            <div class="float-right mt-xs mr-xs p-xs invisible" data-editor--recipe-links-target="recipeLinkAdd" data-controller="stateful" data-action="editor:saving@document->stateful#setState editor:saved@document->stateful#setState editor:failed@document->stateful#setState">
    <span data-stateful-target="state" data-state="editor:saved" class="">
      <a title="ใส่ลิงก์สูตรอื่น" data-action="source-tracking#appendVia modal#advance mousedown->editor--recipe-links#preventEditorFieldBlur" data-behavior="reference" href="/th/recipe_links/new?recipe_id=14781680&amp;source_id=71030190&amp;source_type=Ingredient&amp;target_type=Tip" class=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" class="text-cookpad-gray-600 mise-icon mise-icon-add-attachment"><path d="M4.583 13.304a2.167 2.167 0 0 0 3.064 0L12.36 8.59c.41-.411.698-.898.862-1.416a.577.577 0 0 1 .434-.404c.347-.064.656.227.56.566a4.479 4.479 0 0 1-1.15 1.96l-4.713 4.715a3.167 3.167 0 1 1-4.479-4.479l5.438-5.437a.5.5 0 0 1 .707.707L4.583 10.24a2.167 2.167 0 0 0 0 3.064zM7.411 3.64 2.226 8.825a.5.5 0 0 1-.708-.707l5.186-5.185A4.482 4.482 0 0 1 9.46 1.635c.334-.032.566.296.47.618a.572.572 0 0 1-.486.39 3.485 3.485 0 0 0-2.034.997z" fill="currentColor"></path><path d="m11.24 7.354-4.772 4.771a.5.5 0 1 1-.707-.707l4.772-4.772a.5.5 0 1 1 .707.708z" fill="currentColor"></path><path d="M4.583 13.304a2.167 2.167 0 0 0 3.064 0L12.36 8.59c.41-.411.698-.898.862-1.416a.577.577 0 0 1 .434-.404c.347-.064.656.227.56.566a4.479 4.479 0 0 1-1.15 1.96l-4.713 4.715a3.167 3.167 0 1 1-4.479-4.479l5.438-5.437a.5.5 0 0 1 .707.707L4.583 10.24a2.167 2.167 0 0 0 0 3.064zM7.411 3.64 2.226 8.825a.5.5 0 0 1-.708-.707l5.186-5.185A4.482 4.482 0 0 1 9.46 1.635c.334-.032.566.296.47.618a.572.572 0 0 1-.486.39 3.485 3.485 0 0 0-2.034.997z" stroke="currentColor" stroke-width=".3" stroke-linecap="round" stroke-linejoin="round"></path><path d="m11.24 7.354-4.772 4.771a.5.5 0 1 1-.707-.707l4.772-4.772a.5.5 0 1 1 .707.708z" stroke="currentColor" stroke-width=".3" stroke-linecap="round" stroke-linejoin="round"></path><path d="M13.333 1.333v4M11.333 3.333h4" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"></path></svg>
</a>
    </span>
    <span data-stateful-target="state" data-state="editor:saving editor:failed" class="hidden">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" class="text-cookpad-gray-600 mise-icon mise-icon-add-attachment"><path d="M4.583 13.304a2.167 2.167 0 0 0 3.064 0L12.36 8.59c.41-.411.698-.898.862-1.416a.577.577 0 0 1 .434-.404c.347-.064.656.227.56.566a4.479 4.479 0 0 1-1.15 1.96l-4.713 4.715a3.167 3.167 0 1 1-4.479-4.479l5.438-5.437a.5.5 0 0 1 .707.707L4.583 10.24a2.167 2.167 0 0 0 0 3.064zM7.411 3.64 2.226 8.825a.5.5 0 0 1-.708-.707l5.186-5.185A4.482 4.482 0 0 1 9.46 1.635c.334-.032.566.296.47.618a.572.572 0 0 1-.486.39 3.485 3.485 0 0 0-2.034.997z" fill="currentColor"></path><path d="m11.24 7.354-4.772 4.771a.5.5 0 1 1-.707-.707l4.772-4.772a.5.5 0 1 1 .707.708z" fill="currentColor"></path><path d="M4.583 13.304a2.167 2.167 0 0 0 3.064 0L12.36 8.59c.41-.411.698-.898.862-1.416a.577.577 0 0 1 .434-.404c.347-.064.656.227.56.566a4.479 4.479 0 0 1-1.15 1.96l-4.713 4.715a3.167 3.167 0 1 1-4.479-4.479l5.438-5.437a.5.5 0 0 1 .707.707L4.583 10.24a2.167 2.167 0 0 0 0 3.064zM7.411 3.64 2.226 8.825a.5.5 0 0 1-.708-.707l5.186-5.185A4.482 4.482 0 0 1 9.46 1.635c.334-.032.566.296.47.618a.572.572 0 0 1-.486.39 3.485 3.485 0 0 0-2.034.997z" stroke="currentColor" stroke-width=".3" stroke-linecap="round" stroke-linejoin="round"></path><path d="m11.24 7.354-4.772 4.771a.5.5 0 1 1-.707-.707l4.772-4.772a.5.5 0 1 1 .707.708z" stroke="currentColor" stroke-width=".3" stroke-linecap="round" stroke-linejoin="round"></path><path d="M13.333 1.333v4M11.333 3.333h4" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"></path></svg>

    </span>
  </div>

        </div>
      <div class="pr-md editor-input box-content medium-editor-element medium-editor-placeholder placeholder" data-field="" data-field-name="quantity_and_name" data-placeholder="ไข่ 2 ฟอง" data-maxlength="200" data-editor--character-count-target="field" data-editor--delete-record-target="field" data-editor--add-ingredient-suggestion-target="field" data-action="focus->editor--character-count#showMessage focusout->editor--character-count#hideMessage keyup->editor--character-count#updateMessage focus->editor--recipe-links#showAddLink focusout->editor--recipe-links#hideAddLink" data-character-count-limit-class="border-cookpad-red-500" data-add-sibling-disabled="false" data-splittable-field="true" contenteditable="true" spellcheck="true" data-medium-editor-element="true" role="textbox" aria-multiline="true" data-medium-editor-editor-index="12" medium-editor-index="45fe9168-218e-8ffd-2bc4-716e8543ad01">
      </div>
        <span class="flex flex-col items-end mt-px text-cookpad-gray-500 text-cookpad-12 invisible" data-editor--character-count-target="message" data-character-count-limit-class="text-cookpad-red-500">0/0</span>
    </div>

    <div class="-mt-rg">
        <div class="relative inline-block " data-controller="dropdown" data-dropdown-toggle-class="hidden">
              <a class="js__rich block leading-none" data-action="click->dropdown#toggle click@window->dropdown#hide" title="ดูเพิ่มเติม" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="text-cookpad-gray-400 mise-icon mise-icon-overflow-horizontal"><path d="M11 12a1 1 0 1 0 2 0 1 1 0 0 0-2 0zM18 12a1 1 0 1 0 2 0 1 1 0 0 0-2 0zM4 12a1 1 0 1 0 2 0 1 1 0 0 0-2 0z" fill="currentColor" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
</a>



  <div class="z-40 w-40 absolute right-0 hidden" data-dropdown-target="menu">
    <div class="-mt-sm mr-xs h-2 pt-xs top-px relative float-right z-10 overflow-y-hidden">
  <div class="h-3 w-3 bg-cookpad-white border border-cookpad-gray-400 transform rotate-45"></div>
</div>


    <ul class="dropdown-menu divide-y divide-cookpad-gray-400 relative z-0">
                  

            <li class="text-cookpad-16 text-cookpad-gray-700 hover:bg-cookpad-gray-200">
  
              <a class="dropdown-menu__item-link" data-action="editor--delete-record#click" href="#">
    ลบส่วนผสม
</a>

</li>
</ul>  </div>
</div>
    </div>
  </div>


</li>
    <li id="ingredient_71060637" class="ingredient py-xs text-cookpad-16" data-record="/th/recipes/14781680/ingredients?headline=false" data-controller="editor--delete-record editor--character-count editor--recipe-links" data-editor--delete-record-confirmation-message-value="คุณแน่ใจว่าจะลบนะคะ?">
  
  <div data-field-group="" class="flex items-center field-group">
    <div class="text-cookpad-gray-400 flex-none -mt-rg">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="cursor-move mise-icon mise-icon-move-bars" data-behavior="handle"><path d="M21 10H3M21 6H3M21 14H3M21 18H3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>


    </div>

    <div class="flex-grow mx-sm">
        <div id="recipe_link_add_ingredient">
            <div class="float-right mt-xs mr-xs p-xs invisible" data-editor--recipe-links-target="recipeLinkAdd" data-controller="stateful" data-action="editor:saving@document->stateful#setState editor:saved@document->stateful#setState editor:failed@document->stateful#setState">
    <span data-stateful-target="state" data-state="editor:saved" class="">
      <a title="ใส่ลิงก์สูตรอื่น" data-action="source-tracking#appendVia modal#advance mousedown->editor--recipe-links#preventEditorFieldBlur" data-behavior="reference" href="/th/recipe_links/new?recipe_id=14781680&amp;source_id=71060637&amp;source_type=Ingredient&amp;target_type=Tip" class=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" class="text-cookpad-gray-600 mise-icon mise-icon-add-attachment"><path d="M4.583 13.304a2.167 2.167 0 0 0 3.064 0L12.36 8.59c.41-.411.698-.898.862-1.416a.577.577 0 0 1 .434-.404c.347-.064.656.227.56.566a4.479 4.479 0 0 1-1.15 1.96l-4.713 4.715a3.167 3.167 0 1 1-4.479-4.479l5.438-5.437a.5.5 0 0 1 .707.707L4.583 10.24a2.167 2.167 0 0 0 0 3.064zM7.411 3.64 2.226 8.825a.5.5 0 0 1-.708-.707l5.186-5.185A4.482 4.482 0 0 1 9.46 1.635c.334-.032.566.296.47.618a.572.572 0 0 1-.486.39 3.485 3.485 0 0 0-2.034.997z" fill="currentColor"></path><path d="m11.24 7.354-4.772 4.771a.5.5 0 1 1-.707-.707l4.772-4.772a.5.5 0 1 1 .707.708z" fill="currentColor"></path><path d="M4.583 13.304a2.167 2.167 0 0 0 3.064 0L12.36 8.59c.41-.411.698-.898.862-1.416a.577.577 0 0 1 .434-.404c.347-.064.656.227.56.566a4.479 4.479 0 0 1-1.15 1.96l-4.713 4.715a3.167 3.167 0 1 1-4.479-4.479l5.438-5.437a.5.5 0 0 1 .707.707L4.583 10.24a2.167 2.167 0 0 0 0 3.064zM7.411 3.64 2.226 8.825a.5.5 0 0 1-.708-.707l5.186-5.185A4.482 4.482 0 0 1 9.46 1.635c.334-.032.566.296.47.618a.572.572 0 0 1-.486.39 3.485 3.485 0 0 0-2.034.997z" stroke="currentColor" stroke-width=".3" stroke-linecap="round" stroke-linejoin="round"></path><path d="m11.24 7.354-4.772 4.771a.5.5 0 1 1-.707-.707l4.772-4.772a.5.5 0 1 1 .707.708z" stroke="currentColor" stroke-width=".3" stroke-linecap="round" stroke-linejoin="round"></path><path d="M13.333 1.333v4M11.333 3.333h4" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"></path></svg>
</a>
    </span>
    <span data-stateful-target="state" data-state="editor:saving editor:failed" class="hidden">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" class="text-cookpad-gray-600 mise-icon mise-icon-add-attachment"><path d="M4.583 13.304a2.167 2.167 0 0 0 3.064 0L12.36 8.59c.41-.411.698-.898.862-1.416a.577.577 0 0 1 .434-.404c.347-.064.656.227.56.566a4.479 4.479 0 0 1-1.15 1.96l-4.713 4.715a3.167 3.167 0 1 1-4.479-4.479l5.438-5.437a.5.5 0 0 1 .707.707L4.583 10.24a2.167 2.167 0 0 0 0 3.064zM7.411 3.64 2.226 8.825a.5.5 0 0 1-.708-.707l5.186-5.185A4.482 4.482 0 0 1 9.46 1.635c.334-.032.566.296.47.618a.572.572 0 0 1-.486.39 3.485 3.485 0 0 0-2.034.997z" fill="currentColor"></path><path d="m11.24 7.354-4.772 4.771a.5.5 0 1 1-.707-.707l4.772-4.772a.5.5 0 1 1 .707.708z" fill="currentColor"></path><path d="M4.583 13.304a2.167 2.167 0 0 0 3.064 0L12.36 8.59c.41-.411.698-.898.862-1.416a.577.577 0 0 1 .434-.404c.347-.064.656.227.56.566a4.479 4.479 0 0 1-1.15 1.96l-4.713 4.715a3.167 3.167 0 1 1-4.479-4.479l5.438-5.437a.5.5 0 0 1 .707.707L4.583 10.24a2.167 2.167 0 0 0 0 3.064zM7.411 3.64 2.226 8.825a.5.5 0 0 1-.708-.707l5.186-5.185A4.482 4.482 0 0 1 9.46 1.635c.334-.032.566.296.47.618a.572.572 0 0 1-.486.39 3.485 3.485 0 0 0-2.034.997z" stroke="currentColor" stroke-width=".3" stroke-linecap="round" stroke-linejoin="round"></path><path d="m11.24 7.354-4.772 4.771a.5.5 0 1 1-.707-.707l4.772-4.772a.5.5 0 1 1 .707.708z" stroke="currentColor" stroke-width=".3" stroke-linecap="round" stroke-linejoin="round"></path><path d="M13.333 1.333v4M11.333 3.333h4" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"></path></svg>

    </span>
  </div>

        </div>
      <div class="pr-md editor-input box-content medium-editor-element placeholder" data-field="" data-field-name="quantity_and_name" data-placeholder="ไข่ 2 ฟอง" data-maxlength="200" data-editor--character-count-target="field" data-editor--delete-record-target="field" data-editor--add-ingredient-suggestion-target="field" data-action="focus->editor--character-count#showMessage focusout->editor--character-count#hideMessage keyup->editor--character-count#updateMessage focus->editor--recipe-links#showAddLink focusout->editor--recipe-links#hideAddLink" data-character-count-limit-class="border-cookpad-red-500" data-add-sibling-disabled="false" data-splittable-field="true" contenteditable="true" spellcheck="true" data-medium-editor-element="true" role="textbox" aria-multiline="true" data-medium-editor-editor-index="13" medium-editor-index="50736a28-2adf-60a4-823e-861c8273689c" data-medium-focused="true">
      </div>
        <span class="flex flex-col items-end mt-px text-cookpad-gray-500 text-cookpad-12 invisible" data-editor--character-count-target="message" data-character-count-limit-class="text-cookpad-red-500">0/0</span>
    </div>

    <div class="-mt-rg">
        <div class="relative inline-block " data-controller="dropdown" data-dropdown-toggle-class="hidden">
              <a class="js__rich block leading-none" data-action="click->dropdown#toggle click@window->dropdown#hide" title="ดูเพิ่มเติม" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="text-cookpad-gray-400 mise-icon mise-icon-overflow-horizontal"><path d="M11 12a1 1 0 1 0 2 0 1 1 0 0 0-2 0zM18 12a1 1 0 1 0 2 0 1 1 0 0 0-2 0zM4 12a1 1 0 1 0 2 0 1 1 0 0 0-2 0z" fill="currentColor" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
</a>



  <div class="z-40 w-40 absolute right-0 hidden" data-dropdown-target="menu">
    <div class="-mt-sm mr-xs h-2 pt-xs top-px relative float-right z-10 overflow-y-hidden">
  <div class="h-3 w-3 bg-cookpad-white border border-cookpad-gray-400 transform rotate-45"></div>
</div>


    <ul class="dropdown-menu divide-y divide-cookpad-gray-400 relative z-0">
                  

            <li class="text-cookpad-16 text-cookpad-gray-700 hover:bg-cookpad-gray-200">
  
              <a class="dropdown-menu__item-link" data-action="editor--delete-record#click" href="#">
    ลบส่วนผสม
</a>

</li>
</ul>  </div>
</div>
    </div>
  </div>


</li></ol>
  </div>
  <div class="flex justify-center">
    <button class="editor__tool mt-rg mr-rg font-semibold" data-action="editor--add-record#append" data-controller="editor--tabbable">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="mise-icon mise-icon-plus"><path d="M12 6v12M6 12h12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
<span class="mise-icon-text">ส่วนผสม</span>
    </button>

    <button class="editor__tool mt-rg mr-rg font-semibold" data-add-record-type="section" data-action="editor--add-record#append" data-controller="editor--tabbable">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="mise-icon mise-icon-plus"><path d="M12 6v12M6 12h12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
<span class="mise-icon-text">แบ่งหัวข้อ</span>
    </button>
  </div>
</section>


        <section id="steps" class="steps-container p-rg bg-cookpad-white mt-sm" data-controller="editor--add-record">
  <div class="mb-rg">
    <h2 class="text-cookpad-24 font-semibold mb-sm">ขั้นตอน</h2>
  </div>

  <div data-record-list="" data-editor--add-record-target="list">
    <template data-type="default">
      <li id="new_step" class="bg-cookpad-white step numbered-list__item" data-record="/th/recipes/14781680/steps" data-controller="editor--delete-record editor--recipe-links" data-editor--delete-record-confirmation-message-value="คุณแน่ใจว่าจะลบนะคะ?">
  
  <div data-field-group="" class="relative" data-editor--recipe-links-target="fieldGroup">
    <div class="flex flex-col">
      <div class="flex items-center">
        <div class="flex-grow">
            <div id="recipe_link_add_step" class="mr-sm">
                <div class="float-right mt-xs mr-xs p-xs " data-editor--recipe-links-target="recipeLinkAdd" data-controller="stateful" data-action="editor:saving@document->stateful#setState editor:saved@document->stateful#setState editor:failed@document->stateful#setState">
    <span data-stateful-target="state" data-state="editor:saved">
      <a title="ใส่ลิงก์สูตรอื่น" data-action="source-tracking#appendVia modal#advance mousedown->editor--recipe-links#preventEditorFieldBlur" data-behavior="reference" href="/th/recipe_links/new?recipe_id=14781680&amp;source_id=new_source_id&amp;source_type=Step&amp;target_type=Tip"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" class="text-cookpad-gray-600 mise-icon mise-icon-add-attachment"><path d="M4.583 13.304a2.167 2.167 0 0 0 3.064 0L12.36 8.59c.41-.411.698-.898.862-1.416a.577.577 0 0 1 .434-.404c.347-.064.656.227.56.566a4.479 4.479 0 0 1-1.15 1.96l-4.713 4.715a3.167 3.167 0 1 1-4.479-4.479l5.438-5.437a.5.5 0 0 1 .707.707L4.583 10.24a2.167 2.167 0 0 0 0 3.064zM7.411 3.64 2.226 8.825a.5.5 0 0 1-.708-.707l5.186-5.185A4.482 4.482 0 0 1 9.46 1.635c.334-.032.566.296.47.618a.572.572 0 0 1-.486.39 3.485 3.485 0 0 0-2.034.997z" fill="currentColor"></path><path d="m11.24 7.354-4.772 4.771a.5.5 0 1 1-.707-.707l4.772-4.772a.5.5 0 1 1 .707.708z" fill="currentColor"></path><path d="M4.583 13.304a2.167 2.167 0 0 0 3.064 0L12.36 8.59c.41-.411.698-.898.862-1.416a.577.577 0 0 1 .434-.404c.347-.064.656.227.56.566a4.479 4.479 0 0 1-1.15 1.96l-4.713 4.715a3.167 3.167 0 1 1-4.479-4.479l5.438-5.437a.5.5 0 0 1 .707.707L4.583 10.24a2.167 2.167 0 0 0 0 3.064zM7.411 3.64 2.226 8.825a.5.5 0 0 1-.708-.707l5.186-5.185A4.482 4.482 0 0 1 9.46 1.635c.334-.032.566.296.47.618a.572.572 0 0 1-.486.39 3.485 3.485 0 0 0-2.034.997z" stroke="currentColor" stroke-width=".3" stroke-linecap="round" stroke-linejoin="round"></path><path d="m11.24 7.354-4.772 4.771a.5.5 0 1 1-.707-.707l4.772-4.772a.5.5 0 1 1 .707.708z" stroke="currentColor" stroke-width=".3" stroke-linecap="round" stroke-linejoin="round"></path><path d="M13.333 1.333v4M11.333 3.333h4" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"></path></svg>
</a>
    </span>
    <span data-stateful-target="state" data-state="editor:saving editor:failed" class="hidden">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" class="text-cookpad-gray-600 mise-icon mise-icon-add-attachment"><path d="M4.583 13.304a2.167 2.167 0 0 0 3.064 0L12.36 8.59c.41-.411.698-.898.862-1.416a.577.577 0 0 1 .434-.404c.347-.064.656.227.56.566a4.479 4.479 0 0 1-1.15 1.96l-4.713 4.715a3.167 3.167 0 1 1-4.479-4.479l5.438-5.437a.5.5 0 0 1 .707.707L4.583 10.24a2.167 2.167 0 0 0 0 3.064zM7.411 3.64 2.226 8.825a.5.5 0 0 1-.708-.707l5.186-5.185A4.482 4.482 0 0 1 9.46 1.635c.334-.032.566.296.47.618a.572.572 0 0 1-.486.39 3.485 3.485 0 0 0-2.034.997z" fill="currentColor"></path><path d="m11.24 7.354-4.772 4.771a.5.5 0 1 1-.707-.707l4.772-4.772a.5.5 0 1 1 .707.708z" fill="currentColor"></path><path d="M4.583 13.304a2.167 2.167 0 0 0 3.064 0L12.36 8.59c.41-.411.698-.898.862-1.416a.577.577 0 0 1 .434-.404c.347-.064.656.227.56.566a4.479 4.479 0 0 1-1.15 1.96l-4.713 4.715a3.167 3.167 0 1 1-4.479-4.479l5.438-5.437a.5.5 0 0 1 .707.707L4.583 10.24a2.167 2.167 0 0 0 0 3.064zM7.411 3.64 2.226 8.825a.5.5 0 0 1-.708-.707l5.186-5.185A4.482 4.482 0 0 1 9.46 1.635c.334-.032.566.296.47.618a.572.572 0 0 1-.486.39 3.485 3.485 0 0 0-2.034.997z" stroke="currentColor" stroke-width=".3" stroke-linecap="round" stroke-linejoin="round"></path><path d="m11.24 7.354-4.772 4.771a.5.5 0 1 1-.707-.707l4.772-4.772a.5.5 0 1 1 .707.708z" stroke="currentColor" stroke-width=".3" stroke-linecap="round" stroke-linejoin="round"></path><path d="M13.333 1.333v4M11.333 3.333h4" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"></path></svg>

    </span>
  </div>

            </div>
          <div class="pr-lg editor-input prose mr-sm" dir="auto" data-field="textarea" data-field-name="description" data-placeholder="ตีไข่แล้วผสมกับน้ำสต็อก" data-maxlength="500" data-editor--delete-record-target="field">
            <p class="mb-sm"></p>
          </div>
        </div>

        <div class="relative inline-block " data-controller="dropdown" data-dropdown-toggle-class="hidden">
              <a class="js__rich block leading-none" data-action="click->dropdown#toggle click@window->dropdown#hide" title="ดูเพิ่มเติม" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="text-cookpad-gray-400 mise-icon mise-icon-overflow-horizontal"><path d="M11 12a1 1 0 1 0 2 0 1 1 0 0 0-2 0zM18 12a1 1 0 1 0 2 0 1 1 0 0 0-2 0zM4 12a1 1 0 1 0 2 0 1 1 0 0 0-2 0z" fill="currentColor" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
</a>



  <div class="z-40 w-40 absolute right-0 hidden" data-dropdown-target="menu">
    <div class="-mt-sm mr-xs h-2 pt-xs top-px relative float-right z-10 overflow-y-hidden">
  <div class="h-3 w-3 bg-cookpad-white border border-cookpad-gray-400 transform rotate-45"></div>
</div>


    <ul class="dropdown-menu divide-y divide-cookpad-gray-400 relative z-0">
                  

            <li class="text-cookpad-16 text-cookpad-gray-700 hover:bg-cookpad-gray-200">
  
              <a class="dropdown-menu__item-link" data-action="editor--add-record#appendAfterCurrent" href="#">
    เพิ่มขั้นตอน
</a>

</li>
            <li class="text-cookpad-16 text-cookpad-gray-700 hover:bg-cookpad-gray-200">
  
              <a class="dropdown-menu__item-link" data-action="editor--delete-record#click" href="#">
    ลบขั้นตอน
</a>

</li>
</ul>  </div>
</div>
      </div>

      <div class="mr-sm my-sm" data-record-list="">
        <template data-type="default">
          <div id="new_step_attachment" class="step-image" data-record="/th/steps/:parent_record_id/step_attachments">
  
    <div data-field="file" data-field-name="file" data-ajax-upload="/th/step_attachment/images">

      <div class="w-20 h-16 md:w-40 md:h-32 text-cookpad-gray-400 rounded bg-cookpad-gray-200">
        <div class="w-6 h-6 absolute inset-1/2 transform -translate-x-1/2 -translate-y-1/2">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 50 50" fill="none" class="w-6 h-6 hidden loading:inline-block animate-spin mise-icon mise-icon-spinner"><path fill="currentColor" d="M43.935 25.145c0-10.318-8.364-18.683-18.683-18.683-10.318 0-18.683 8.365-18.683 18.683h4.068c0-8.071 6.543-14.615 14.615-14.615s14.615 6.543 14.615 14.615h4.068z"></path></svg>

  </div>

          <div class="w-full h-full image-upload editor__tool" data-editor--delete-record-target="image" data-editor--step-images-target="placeholder">
            <div class="absolute top-1/2 text-center w-full -mt-rg">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" class="loading:hidden mise-icon mise-icon-camera"><path d="M15 17.5H5a3.333 3.333 0 0 1-3.333-3.333v-7.5c0-.92.746-1.667 1.667-1.667h1.608c.557 0 1.077-.279 1.386-.742l.677-1.016c.31-.463.83-.742 1.387-.742h3.216c.557 0 1.078.279 1.387.742l.677 1.016c.31.463.83.742 1.387.742h1.608c.92 0 1.666.746 1.666 1.667v7.5A3.333 3.333 0 0 1 15 17.5z" stroke="currentColor" stroke-width="1.3"></path><circle cx="4.167" cy="7.5" r=".833" transform="rotate(-180 4.167 7.5)" fill="currentColor" stroke="currentColor" stroke-width=".1"></circle><circle cx="10" cy="10.834" r="2.5" stroke="currentColor" stroke-width="1.3"></circle></svg>

              <input type="file" name="file" aria-label="เพิ่มรูป">
            </div>
          </div>
      </div>
    </div>

</div>
        </template>
        <div data-record-list-container="" data-action="record:persisted->editor--step-images#onNewRecord record:deleted->editor--step-images#onRecordDelete" data-controller="editor--step-images" data-editor--step-images-max-images-value="3" data-behavior="sortable" data-sort-url="/th/steps/:parent_record_id/step_attachments/sort" class="space-x-xs">
          <div id="new_step_attachment" class="step-image" data-record="/th/steps/:parent_record_id/step_attachments">
  
    <div data-field="file" data-field-name="file" data-ajax-upload="/th/step_attachment/images">

      <div class="w-20 h-16 md:w-40 md:h-32 text-cookpad-gray-400 rounded bg-cookpad-gray-200">
        <div class="w-6 h-6 absolute inset-1/2 transform -translate-x-1/2 -translate-y-1/2">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 50 50" fill="none" class="w-6 h-6 hidden loading:inline-block animate-spin mise-icon mise-icon-spinner"><path fill="currentColor" d="M43.935 25.145c0-10.318-8.364-18.683-18.683-18.683-10.318 0-18.683 8.365-18.683 18.683h4.068c0-8.071 6.543-14.615 14.615-14.615s14.615 6.543 14.615 14.615h4.068z"></path></svg>

  </div>

          <div class="w-full h-full image-upload editor__tool" data-editor--delete-record-target="image" data-editor--step-images-target="placeholder">
            <div class="absolute top-1/2 text-center w-full -mt-rg">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" class="loading:hidden mise-icon mise-icon-camera"><path d="M15 17.5H5a3.333 3.333 0 0 1-3.333-3.333v-7.5c0-.92.746-1.667 1.667-1.667h1.608c.557 0 1.077-.279 1.386-.742l.677-1.016c.31-.463.83-.742 1.387-.742h3.216c.557 0 1.078.279 1.387.742l.677 1.016c.31.463.83.742 1.387.742h1.608c.92 0 1.666.746 1.666 1.667v7.5A3.333 3.333 0 0 1 15 17.5z" stroke="currentColor" stroke-width="1.3"></path><circle cx="4.167" cy="7.5" r=".833" transform="rotate(-180 4.167 7.5)" fill="currentColor" stroke="currentColor" stroke-width=".1"></circle><circle cx="10" cy="10.834" r="2.5" stroke="currentColor" stroke-width="1.3"></circle></svg>

              <input type="file" name="file" aria-label="เพิ่มรูป">
            </div>
          </div>
      </div>
    </div>

</div>
        </div>
      </div>

      <div id="recipe_links_step">
        
      </div>
    </div>

    <div class="text-cookpad-gray-400 absolute top-0 left-0 mt-md w-6 text-center">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="cursor-move mise-icon mise-icon-move-bars" data-behavior="handle"><path d="M21 10H3M21 6H3M21 14H3M21 18H3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>


    </div>
  </div>

</li>
    </template>

    <ol class="numbered-list ui-sortable" data-record-list-container="" data-behavior="sortable" data-sort-url="/th/recipes/14781680/steps/sort" dir="auto">
      <li id="step_42157325" class="bg-cookpad-white step numbered-list__item" data-record="/th/recipes/14781680/steps" data-controller="editor--delete-record editor--recipe-links" data-editor--delete-record-confirmation-message-value="คุณแน่ใจว่าจะลบนะคะ?">
  
  <div data-field-group="" class="relative field-group" data-editor--recipe-links-target="fieldGroup">
    <div class="flex flex-col">
      <div class="flex items-center">
        <div class="flex-grow">
            <div id="recipe_link_add_step_42157325" class="mr-sm">
                <div class="float-right mt-xs mr-xs p-xs invisible" data-editor--recipe-links-target="recipeLinkAdd" data-controller="stateful" data-action="editor:saving@document->stateful#setState editor:saved@document->stateful#setState editor:failed@document->stateful#setState">
    <span data-stateful-target="state" data-state="editor:saved" class="">
      <a title="ใส่ลิงก์สูตรอื่น" data-action="source-tracking#appendVia modal#advance mousedown->editor--recipe-links#preventEditorFieldBlur" data-behavior="reference" href="/th/recipe_links/new?recipe_id=14781680&amp;source_id=42157325&amp;source_type=Step&amp;target_type=Tip" class=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" class="text-cookpad-gray-600 mise-icon mise-icon-add-attachment"><path d="M4.583 13.304a2.167 2.167 0 0 0 3.064 0L12.36 8.59c.41-.411.698-.898.862-1.416a.577.577 0 0 1 .434-.404c.347-.064.656.227.56.566a4.479 4.479 0 0 1-1.15 1.96l-4.713 4.715a3.167 3.167 0 1 1-4.479-4.479l5.438-5.437a.5.5 0 0 1 .707.707L4.583 10.24a2.167 2.167 0 0 0 0 3.064zM7.411 3.64 2.226 8.825a.5.5 0 0 1-.708-.707l5.186-5.185A4.482 4.482 0 0 1 9.46 1.635c.334-.032.566.296.47.618a.572.572 0 0 1-.486.39 3.485 3.485 0 0 0-2.034.997z" fill="currentColor"></path><path d="m11.24 7.354-4.772 4.771a.5.5 0 1 1-.707-.707l4.772-4.772a.5.5 0 1 1 .707.708z" fill="currentColor"></path><path d="M4.583 13.304a2.167 2.167 0 0 0 3.064 0L12.36 8.59c.41-.411.698-.898.862-1.416a.577.577 0 0 1 .434-.404c.347-.064.656.227.56.566a4.479 4.479 0 0 1-1.15 1.96l-4.713 4.715a3.167 3.167 0 1 1-4.479-4.479l5.438-5.437a.5.5 0 0 1 .707.707L4.583 10.24a2.167 2.167 0 0 0 0 3.064zM7.411 3.64 2.226 8.825a.5.5 0 0 1-.708-.707l5.186-5.185A4.482 4.482 0 0 1 9.46 1.635c.334-.032.566.296.47.618a.572.572 0 0 1-.486.39 3.485 3.485 0 0 0-2.034.997z" stroke="currentColor" stroke-width=".3" stroke-linecap="round" stroke-linejoin="round"></path><path d="m11.24 7.354-4.772 4.771a.5.5 0 1 1-.707-.707l4.772-4.772a.5.5 0 1 1 .707.708z" stroke="currentColor" stroke-width=".3" stroke-linecap="round" stroke-linejoin="round"></path><path d="M13.333 1.333v4M11.333 3.333h4" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"></path></svg>
</a>
    </span>
    <span data-stateful-target="state" data-state="editor:saving editor:failed" class="hidden">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" class="text-cookpad-gray-600 mise-icon mise-icon-add-attachment"><path d="M4.583 13.304a2.167 2.167 0 0 0 3.064 0L12.36 8.59c.41-.411.698-.898.862-1.416a.577.577 0 0 1 .434-.404c.347-.064.656.227.56.566a4.479 4.479 0 0 1-1.15 1.96l-4.713 4.715a3.167 3.167 0 1 1-4.479-4.479l5.438-5.437a.5.5 0 0 1 .707.707L4.583 10.24a2.167 2.167 0 0 0 0 3.064zM7.411 3.64 2.226 8.825a.5.5 0 0 1-.708-.707l5.186-5.185A4.482 4.482 0 0 1 9.46 1.635c.334-.032.566.296.47.618a.572.572 0 0 1-.486.39 3.485 3.485 0 0 0-2.034.997z" fill="currentColor"></path><path d="m11.24 7.354-4.772 4.771a.5.5 0 1 1-.707-.707l4.772-4.772a.5.5 0 1 1 .707.708z" fill="currentColor"></path><path d="M4.583 13.304a2.167 2.167 0 0 0 3.064 0L12.36 8.59c.41-.411.698-.898.862-1.416a.577.577 0 0 1 .434-.404c.347-.064.656.227.56.566a4.479 4.479 0 0 1-1.15 1.96l-4.713 4.715a3.167 3.167 0 1 1-4.479-4.479l5.438-5.437a.5.5 0 0 1 .707.707L4.583 10.24a2.167 2.167 0 0 0 0 3.064zM7.411 3.64 2.226 8.825a.5.5 0 0 1-.708-.707l5.186-5.185A4.482 4.482 0 0 1 9.46 1.635c.334-.032.566.296.47.618a.572.572 0 0 1-.486.39 3.485 3.485 0 0 0-2.034.997z" stroke="currentColor" stroke-width=".3" stroke-linecap="round" stroke-linejoin="round"></path><path d="m11.24 7.354-4.772 4.771a.5.5 0 1 1-.707-.707l4.772-4.772a.5.5 0 1 1 .707.708z" stroke="currentColor" stroke-width=".3" stroke-linecap="round" stroke-linejoin="round"></path><path d="M13.333 1.333v4M11.333 3.333h4" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"></path></svg>

    </span>
  </div>

            </div>
          <div class="pr-lg editor-input prose mr-sm placeholder" dir="auto" data-field="textarea" data-field-name="description" data-placeholder="ตีไข่แล้วผสมกับน้ำสต็อก" data-maxlength="500" data-editor--delete-record-target="field"><textarea rows="1" placeholder="ตีไข่แล้วผสมกับน้ำสต็อก" maxlength="500" dir="auto" style="width: 100%; background: none; border: none; outline: none; resize: none; padding: 0px; overflow: hidden; overflow-wrap: break-word; height: 24px;"></textarea></div>
        </div>

        <div class="relative inline-block " data-controller="dropdown" data-dropdown-toggle-class="hidden">
              <a class="js__rich block leading-none" data-action="click->dropdown#toggle click@window->dropdown#hide" title="ดูเพิ่มเติม" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="text-cookpad-gray-400 mise-icon mise-icon-overflow-horizontal"><path d="M11 12a1 1 0 1 0 2 0 1 1 0 0 0-2 0zM18 12a1 1 0 1 0 2 0 1 1 0 0 0-2 0zM4 12a1 1 0 1 0 2 0 1 1 0 0 0-2 0z" fill="currentColor" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
</a>



  <div class="z-40 w-40 absolute right-0 hidden" data-dropdown-target="menu">
    <div class="-mt-sm mr-xs h-2 pt-xs top-px relative float-right z-10 overflow-y-hidden">
  <div class="h-3 w-3 bg-cookpad-white border border-cookpad-gray-400 transform rotate-45"></div>
</div>


    <ul class="dropdown-menu divide-y divide-cookpad-gray-400 relative z-0">
                  

            <li class="text-cookpad-16 text-cookpad-gray-700 hover:bg-cookpad-gray-200">
  
              <a class="dropdown-menu__item-link" data-action="editor--add-record#appendAfterCurrent" href="#">
    เพิ่มขั้นตอน
</a>

</li>
            <li class="text-cookpad-16 text-cookpad-gray-700 hover:bg-cookpad-gray-200">
  
              <a class="dropdown-menu__item-link" data-action="editor--delete-record#click" href="#">
    ลบขั้นตอน
</a>

</li>
</ul>  </div>
</div>
      </div>

      <div class="mr-sm my-sm" data-record-list="">
        <template data-type="default">
          <div id="new_step_attachment" class="step-image" data-record="/th/steps/:parent_record_id/step_attachments">
  
    <div data-field="file" data-field-name="file" data-ajax-upload="/th/step_attachment/images">

      <div class="w-20 h-16 md:w-40 md:h-32 text-cookpad-gray-400 rounded bg-cookpad-gray-200">
        <div class="w-6 h-6 absolute inset-1/2 transform -translate-x-1/2 -translate-y-1/2">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 50 50" fill="none" class="w-6 h-6 hidden loading:inline-block animate-spin mise-icon mise-icon-spinner"><path fill="currentColor" d="M43.935 25.145c0-10.318-8.364-18.683-18.683-18.683-10.318 0-18.683 8.365-18.683 18.683h4.068c0-8.071 6.543-14.615 14.615-14.615s14.615 6.543 14.615 14.615h4.068z"></path></svg>

  </div>

          <div class="w-full h-full image-upload editor__tool" data-editor--delete-record-target="image" data-editor--step-images-target="placeholder">
            <div class="absolute top-1/2 text-center w-full -mt-rg">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" class="loading:hidden mise-icon mise-icon-camera"><path d="M15 17.5H5a3.333 3.333 0 0 1-3.333-3.333v-7.5c0-.92.746-1.667 1.667-1.667h1.608c.557 0 1.077-.279 1.386-.742l.677-1.016c.31-.463.83-.742 1.387-.742h3.216c.557 0 1.078.279 1.387.742l.677 1.016c.31.463.83.742 1.387.742h1.608c.92 0 1.666.746 1.666 1.667v7.5A3.333 3.333 0 0 1 15 17.5z" stroke="currentColor" stroke-width="1.3"></path><circle cx="4.167" cy="7.5" r=".833" transform="rotate(-180 4.167 7.5)" fill="currentColor" stroke="currentColor" stroke-width=".1"></circle><circle cx="10" cy="10.834" r="2.5" stroke="currentColor" stroke-width="1.3"></circle></svg>

              <input type="file" name="file" aria-label="เพิ่มรูป">
            </div>
          </div>
      </div>
    </div>

</div>
        </template>
        <div data-record-list-container="" data-action="record:persisted->editor--step-images#onNewRecord record:deleted->editor--step-images#onRecordDelete" data-controller="editor--step-images" data-editor--step-images-max-images-value="3" data-behavior="sortable" data-sort-url="/th/steps/:parent_record_id/step_attachments/sort" class="space-x-xs ui-sortable">
          <div id="new_step_attachment" class="step-image" data-record="/th/steps/:parent_record_id/step_attachments">
  
    <div data-field="file" data-field-name="file" data-ajax-upload="/th/step_attachment/images" class="droppable">

      <div class="w-20 h-16 md:w-40 md:h-32 text-cookpad-gray-400 rounded bg-cookpad-gray-200">
        <div class="w-6 h-6 absolute inset-1/2 transform -translate-x-1/2 -translate-y-1/2">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 50 50" fill="none" class="w-6 h-6 hidden loading:inline-block animate-spin mise-icon mise-icon-spinner"><path fill="currentColor" d="M43.935 25.145c0-10.318-8.364-18.683-18.683-18.683-10.318 0-18.683 8.365-18.683 18.683h4.068c0-8.071 6.543-14.615 14.615-14.615s14.615 6.543 14.615 14.615h4.068z"></path></svg>

  </div>

          <div class="w-full h-full image-upload editor__tool" data-editor--delete-record-target="image" data-editor--step-images-target="placeholder">
            <div class="absolute top-1/2 text-center w-full -mt-rg">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" class="loading:hidden mise-icon mise-icon-camera"><path d="M15 17.5H5a3.333 3.333 0 0 1-3.333-3.333v-7.5c0-.92.746-1.667 1.667-1.667h1.608c.557 0 1.077-.279 1.386-.742l.677-1.016c.31-.463.83-.742 1.387-.742h3.216c.557 0 1.078.279 1.387.742l.677 1.016c.31.463.83.742 1.387.742h1.608c.92 0 1.666.746 1.666 1.667v7.5A3.333 3.333 0 0 1 15 17.5z" stroke="currentColor" stroke-width="1.3"></path><circle cx="4.167" cy="7.5" r=".833" transform="rotate(-180 4.167 7.5)" fill="currentColor" stroke="currentColor" stroke-width=".1"></circle><circle cx="10" cy="10.834" r="2.5" stroke="currentColor" stroke-width="1.3"></circle></svg>

              <input type="file" name="file" aria-label="เพิ่มรูป" accept="image/*">
            </div>
          </div>
      </div>
    </div>

</div>
        </div>
      </div>

      <div id="recipe_links_step_42157325">
        
      </div>
    </div>

    <div class="text-cookpad-gray-400 absolute top-0 left-0 mt-md w-6 text-center">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="cursor-move mise-icon mise-icon-move-bars ui-sortable-handle" data-behavior="handle"><path d="M21 10H3M21 6H3M21 14H3M21 18H3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>


    </div>
  </div>

</li><li id="step_42157326" class="bg-cookpad-white step numbered-list__item" data-record="/th/recipes/14781680/steps" data-controller="editor--delete-record editor--recipe-links" data-editor--delete-record-confirmation-message-value="คุณแน่ใจว่าจะลบนะคะ?">
  
  <div data-field-group="" class="relative field-group" data-editor--recipe-links-target="fieldGroup">
    <div class="flex flex-col">
      <div class="flex items-center">
        <div class="flex-grow">
            <div id="recipe_link_add_step_42157326" class="mr-sm">
                <div class="float-right mt-xs mr-xs p-xs invisible" data-editor--recipe-links-target="recipeLinkAdd" data-controller="stateful" data-action="editor:saving@document->stateful#setState editor:saved@document->stateful#setState editor:failed@document->stateful#setState">
    <span data-stateful-target="state" data-state="editor:saved" class="">
      <a title="ใส่ลิงก์สูตรอื่น" data-action="source-tracking#appendVia modal#advance mousedown->editor--recipe-links#preventEditorFieldBlur" data-behavior="reference" href="/th/recipe_links/new?recipe_id=14781680&amp;source_id=42157326&amp;source_type=Step&amp;target_type=Tip" class=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" class="text-cookpad-gray-600 mise-icon mise-icon-add-attachment"><path d="M4.583 13.304a2.167 2.167 0 0 0 3.064 0L12.36 8.59c.41-.411.698-.898.862-1.416a.577.577 0 0 1 .434-.404c.347-.064.656.227.56.566a4.479 4.479 0 0 1-1.15 1.96l-4.713 4.715a3.167 3.167 0 1 1-4.479-4.479l5.438-5.437a.5.5 0 0 1 .707.707L4.583 10.24a2.167 2.167 0 0 0 0 3.064zM7.411 3.64 2.226 8.825a.5.5 0 0 1-.708-.707l5.186-5.185A4.482 4.482 0 0 1 9.46 1.635c.334-.032.566.296.47.618a.572.572 0 0 1-.486.39 3.485 3.485 0 0 0-2.034.997z" fill="currentColor"></path><path d="m11.24 7.354-4.772 4.771a.5.5 0 1 1-.707-.707l4.772-4.772a.5.5 0 1 1 .707.708z" fill="currentColor"></path><path d="M4.583 13.304a2.167 2.167 0 0 0 3.064 0L12.36 8.59c.41-.411.698-.898.862-1.416a.577.577 0 0 1 .434-.404c.347-.064.656.227.56.566a4.479 4.479 0 0 1-1.15 1.96l-4.713 4.715a3.167 3.167 0 1 1-4.479-4.479l5.438-5.437a.5.5 0 0 1 .707.707L4.583 10.24a2.167 2.167 0 0 0 0 3.064zM7.411 3.64 2.226 8.825a.5.5 0 0 1-.708-.707l5.186-5.185A4.482 4.482 0 0 1 9.46 1.635c.334-.032.566.296.47.618a.572.572 0 0 1-.486.39 3.485 3.485 0 0 0-2.034.997z" stroke="currentColor" stroke-width=".3" stroke-linecap="round" stroke-linejoin="round"></path><path d="m11.24 7.354-4.772 4.771a.5.5 0 1 1-.707-.707l4.772-4.772a.5.5 0 1 1 .707.708z" stroke="currentColor" stroke-width=".3" stroke-linecap="round" stroke-linejoin="round"></path><path d="M13.333 1.333v4M11.333 3.333h4" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"></path></svg>
</a>
    </span>
    <span data-stateful-target="state" data-state="editor:saving editor:failed" class="hidden">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" class="text-cookpad-gray-600 mise-icon mise-icon-add-attachment"><path d="M4.583 13.304a2.167 2.167 0 0 0 3.064 0L12.36 8.59c.41-.411.698-.898.862-1.416a.577.577 0 0 1 .434-.404c.347-.064.656.227.56.566a4.479 4.479 0 0 1-1.15 1.96l-4.713 4.715a3.167 3.167 0 1 1-4.479-4.479l5.438-5.437a.5.5 0 0 1 .707.707L4.583 10.24a2.167 2.167 0 0 0 0 3.064zM7.411 3.64 2.226 8.825a.5.5 0 0 1-.708-.707l5.186-5.185A4.482 4.482 0 0 1 9.46 1.635c.334-.032.566.296.47.618a.572.572 0 0 1-.486.39 3.485 3.485 0 0 0-2.034.997z" fill="currentColor"></path><path d="m11.24 7.354-4.772 4.771a.5.5 0 1 1-.707-.707l4.772-4.772a.5.5 0 1 1 .707.708z" fill="currentColor"></path><path d="M4.583 13.304a2.167 2.167 0 0 0 3.064 0L12.36 8.59c.41-.411.698-.898.862-1.416a.577.577 0 0 1 .434-.404c.347-.064.656.227.56.566a4.479 4.479 0 0 1-1.15 1.96l-4.713 4.715a3.167 3.167 0 1 1-4.479-4.479l5.438-5.437a.5.5 0 0 1 .707.707L4.583 10.24a2.167 2.167 0 0 0 0 3.064zM7.411 3.64 2.226 8.825a.5.5 0 0 1-.708-.707l5.186-5.185A4.482 4.482 0 0 1 9.46 1.635c.334-.032.566.296.47.618a.572.572 0 0 1-.486.39 3.485 3.485 0 0 0-2.034.997z" stroke="currentColor" stroke-width=".3" stroke-linecap="round" stroke-linejoin="round"></path><path d="m11.24 7.354-4.772 4.771a.5.5 0 1 1-.707-.707l4.772-4.772a.5.5 0 1 1 .707.708z" stroke="currentColor" stroke-width=".3" stroke-linecap="round" stroke-linejoin="round"></path><path d="M13.333 1.333v4M11.333 3.333h4" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"></path></svg>

    </span>
  </div>

            </div>
          <div class="pr-lg editor-input prose mr-sm placeholder" dir="auto" data-field="textarea" data-field-name="description" data-placeholder="นำไปนึ่งประมาณ 15-20 นาทีจนสุก" data-maxlength="500" data-editor--delete-record-target="field"><textarea rows="1" placeholder="นำไปนึ่งประมาณ 15-20 นาทีจนสุก" maxlength="500" dir="auto" style="width: 100%; background: none; border: none; outline: none; resize: none; padding: 0px; overflow: hidden; overflow-wrap: break-word; height: 24px;"></textarea></div>
        </div>

        <div class="relative inline-block " data-controller="dropdown" data-dropdown-toggle-class="hidden">
              <a class="js__rich block leading-none" data-action="click->dropdown#toggle click@window->dropdown#hide" title="ดูเพิ่มเติม" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="text-cookpad-gray-400 mise-icon mise-icon-overflow-horizontal"><path d="M11 12a1 1 0 1 0 2 0 1 1 0 0 0-2 0zM18 12a1 1 0 1 0 2 0 1 1 0 0 0-2 0zM4 12a1 1 0 1 0 2 0 1 1 0 0 0-2 0z" fill="currentColor" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
</a>



  <div class="z-40 w-40 absolute right-0 hidden" data-dropdown-target="menu">
    <div class="-mt-sm mr-xs h-2 pt-xs top-px relative float-right z-10 overflow-y-hidden">
  <div class="h-3 w-3 bg-cookpad-white border border-cookpad-gray-400 transform rotate-45"></div>
</div>


    <ul class="dropdown-menu divide-y divide-cookpad-gray-400 relative z-0">
                  

            <li class="text-cookpad-16 text-cookpad-gray-700 hover:bg-cookpad-gray-200">
  
              <a class="dropdown-menu__item-link" data-action="editor--add-record#appendAfterCurrent" href="#">
    เพิ่มขั้นตอน
</a>

</li>
            <li class="text-cookpad-16 text-cookpad-gray-700 hover:bg-cookpad-gray-200">
  
              <a class="dropdown-menu__item-link" data-action="editor--delete-record#click" href="#">
    ลบขั้นตอน
</a>

</li>
</ul>  </div>
</div>
      </div>

      <div class="mr-sm my-sm" data-record-list="">
        <template data-type="default">
          <div id="new_step_attachment" class="step-image" data-record="/th/steps/:parent_record_id/step_attachments">
  
    <div data-field="file" data-field-name="file" data-ajax-upload="/th/step_attachment/images">

      <div class="w-20 h-16 md:w-40 md:h-32 text-cookpad-gray-400 rounded bg-cookpad-gray-200">
        <div class="w-6 h-6 absolute inset-1/2 transform -translate-x-1/2 -translate-y-1/2">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 50 50" fill="none" class="w-6 h-6 hidden loading:inline-block animate-spin mise-icon mise-icon-spinner"><path fill="currentColor" d="M43.935 25.145c0-10.318-8.364-18.683-18.683-18.683-10.318 0-18.683 8.365-18.683 18.683h4.068c0-8.071 6.543-14.615 14.615-14.615s14.615 6.543 14.615 14.615h4.068z"></path></svg>

  </div>

          <div class="w-full h-full image-upload editor__tool" data-editor--delete-record-target="image" data-editor--step-images-target="placeholder">
            <div class="absolute top-1/2 text-center w-full -mt-rg">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" class="loading:hidden mise-icon mise-icon-camera"><path d="M15 17.5H5a3.333 3.333 0 0 1-3.333-3.333v-7.5c0-.92.746-1.667 1.667-1.667h1.608c.557 0 1.077-.279 1.386-.742l.677-1.016c.31-.463.83-.742 1.387-.742h3.216c.557 0 1.078.279 1.387.742l.677 1.016c.31.463.83.742 1.387.742h1.608c.92 0 1.666.746 1.666 1.667v7.5A3.333 3.333 0 0 1 15 17.5z" stroke="currentColor" stroke-width="1.3"></path><circle cx="4.167" cy="7.5" r=".833" transform="rotate(-180 4.167 7.5)" fill="currentColor" stroke="currentColor" stroke-width=".1"></circle><circle cx="10" cy="10.834" r="2.5" stroke="currentColor" stroke-width="1.3"></circle></svg>

              <input type="file" name="file" aria-label="เพิ่มรูป">
            </div>
          </div>
      </div>
    </div>

</div>
        </template>
        <div data-record-list-container="" data-action="record:persisted->editor--step-images#onNewRecord record:deleted->editor--step-images#onRecordDelete" data-controller="editor--step-images" data-editor--step-images-max-images-value="3" data-behavior="sortable" data-sort-url="/th/steps/:parent_record_id/step_attachments/sort" class="space-x-xs ui-sortable">
          <div id="new_step_attachment" class="step-image" data-record="/th/steps/:parent_record_id/step_attachments">
  
    <div data-field="file" data-field-name="file" data-ajax-upload="/th/step_attachment/images" class="droppable">

      <div class="w-20 h-16 md:w-40 md:h-32 text-cookpad-gray-400 rounded bg-cookpad-gray-200">
        <div class="w-6 h-6 absolute inset-1/2 transform -translate-x-1/2 -translate-y-1/2">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 50 50" fill="none" class="w-6 h-6 hidden loading:inline-block animate-spin mise-icon mise-icon-spinner"><path fill="currentColor" d="M43.935 25.145c0-10.318-8.364-18.683-18.683-18.683-10.318 0-18.683 8.365-18.683 18.683h4.068c0-8.071 6.543-14.615 14.615-14.615s14.615 6.543 14.615 14.615h4.068z"></path></svg>

  </div>

          <div class="w-full h-full image-upload editor__tool" data-editor--delete-record-target="image" data-editor--step-images-target="placeholder">
            <div class="absolute top-1/2 text-center w-full -mt-rg">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" class="loading:hidden mise-icon mise-icon-camera"><path d="M15 17.5H5a3.333 3.333 0 0 1-3.333-3.333v-7.5c0-.92.746-1.667 1.667-1.667h1.608c.557 0 1.077-.279 1.386-.742l.677-1.016c.31-.463.83-.742 1.387-.742h3.216c.557 0 1.078.279 1.387.742l.677 1.016c.31.463.83.742 1.387.742h1.608c.92 0 1.666.746 1.666 1.667v7.5A3.333 3.333 0 0 1 15 17.5z" stroke="currentColor" stroke-width="1.3"></path><circle cx="4.167" cy="7.5" r=".833" transform="rotate(-180 4.167 7.5)" fill="currentColor" stroke="currentColor" stroke-width=".1"></circle><circle cx="10" cy="10.834" r="2.5" stroke="currentColor" stroke-width="1.3"></circle></svg>

              <input type="file" name="file" aria-label="เพิ่มรูป" accept="image/*">
            </div>
          </div>
      </div>
    </div>

</div>
        </div>
      </div>

      <div id="recipe_links_step_42157326">
        
      </div>
    </div>

    <div class="text-cookpad-gray-400 absolute top-0 left-0 mt-md w-6 text-center">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="cursor-move mise-icon mise-icon-move-bars ui-sortable-handle" data-behavior="handle"><path d="M21 10H3M21 6H3M21 14H3M21 18H3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>


    </div>
  </div>

</li>
    </ol>
  </div>

  <div class="flex justify-center">
    <button class="editor__tool -mt-sm font-semibold" data-action="editor--add-record#append" data-controller="editor--tabbable">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="mise-icon mise-icon-plus"><path d="M12 6v12M6 12h12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
<span class="mise-icon-text">วิธีทำ</span>
    </button>
  </div>
</section>


</div></div>
  </div>
</div>



          </div>
          <footer class="hidden text-center sm:text-left my-lg text-cookpad-14 p-sm flow-root page-footer page-container webview__hidden links print:hidden">
  
  <div class="p-rg">
  <h4 class="h4 mb-sm mt-sm">การค้นหาที่น่าสนใจ</h4>
  <ul>
      <li class="inline mr-sm">
        <a data-controller="link-rewrite" data-action="link-rewrite#appendURLParams" data-link-rewrite-params-value="{&quot;event&quot;:&quot;search.footer_keyword&quot;}" href="/th/search/%E0%B8%AD%E0%B8%B2%E0%B8%AB%E0%B8%B2%E0%B8%A3%E0%B8%95%E0%B8%B2%E0%B8%A1%E0%B8%AA%E0%B8%B1%E0%B9%88%E0%B8%87">อาหารตามสั่ง</a>
      </li>
      <li class="inline mr-sm">
        <a data-controller="link-rewrite" data-action="link-rewrite#appendURLParams" data-link-rewrite-params-value="{&quot;event&quot;:&quot;search.footer_keyword&quot;}" href="/th/search/%E0%B8%AD%E0%B8%81%E0%B9%84%E0%B8%81%E0%B9%88">อกไก่</a>
      </li>
      <li class="inline mr-sm">
        <a data-controller="link-rewrite" data-action="link-rewrite#appendURLParams" data-link-rewrite-params-value="{&quot;event&quot;:&quot;search.footer_keyword&quot;}" href="/th/search/%E0%B8%9B%E0%B8%A5%E0%B8%B2%E0%B8%AB%E0%B8%A1%E0%B8%B6%E0%B8%81">ปลาหมึก</a>
      </li>
      <li class="inline mr-sm">
        <a data-controller="link-rewrite" data-action="link-rewrite#appendURLParams" data-link-rewrite-params-value="{&quot;event&quot;:&quot;search.footer_keyword&quot;}" href="/th/search/%E0%B9%84%E0%B8%82%E0%B9%88">เมนูไข่</a>
      </li>
      <li class="inline mr-sm">
        <a data-controller="link-rewrite" data-action="link-rewrite#appendURLParams" data-link-rewrite-params-value="{&quot;event&quot;:&quot;search.footer_keyword&quot;}" href="/th/search/%E0%B9%80%E0%B8%84%E0%B9%89%E0%B8%81">เค้ก</a>
      </li>
      <li class="inline mr-sm">
        <a data-controller="link-rewrite" data-action="link-rewrite#appendURLParams" data-link-rewrite-params-value="{&quot;event&quot;:&quot;search.footer_keyword&quot;}" href="/th/search/%E0%B9%81%E0%B8%81%E0%B8%87">แกง</a>
      </li>
      <li class="inline mr-sm">
        <a data-controller="link-rewrite" data-action="link-rewrite#appendURLParams" data-link-rewrite-params-value="{&quot;event&quot;:&quot;search.footer_keyword&quot;}" href="/th/search/%E0%B8%81%E0%B8%B1%E0%B8%9A%E0%B9%81%E0%B8%81%E0%B8%A5%E0%B9%89%E0%B8%A1">กับแกล้ม</a>
      </li>
      <li class="inline mr-sm">
        <a data-controller="link-rewrite" data-action="link-rewrite#appendURLParams" data-link-rewrite-params-value="{&quot;event&quot;:&quot;search.footer_keyword&quot;}" href="/th/search/%E0%B8%AD%E0%B8%B2%E0%B8%AB%E0%B8%B2%E0%B8%A3%E0%B9%84%E0%B8%97%E0%B8%A2">อาหารไทย</a>
      </li>
      <li class="inline mr-sm">
        <a data-controller="link-rewrite" data-action="link-rewrite#appendURLParams" data-link-rewrite-params-value="{&quot;event&quot;:&quot;search.footer_keyword&quot;}" href="/th/search/%E0%B9%81%E0%B8%8B%E0%B8%99%E0%B8%A7%E0%B8%B4%E0%B8%8A">แซนวิช</a>
      </li>
      <li class="inline mr-sm">
        <a data-controller="link-rewrite" data-action="link-rewrite#appendURLParams" data-link-rewrite-params-value="{&quot;event&quot;:&quot;search.footer_keyword&quot;}" href="/th/search/%E0%B8%84%E0%B8%B8%E0%B8%81%E0%B8%81%E0%B8%B5%E0%B9%89">คุกกี้</a>
      </li>
      <li class="inline mr-sm">
        <a data-controller="link-rewrite" data-action="link-rewrite#appendURLParams" data-link-rewrite-params-value="{&quot;event&quot;:&quot;search.footer_keyword&quot;}" href="/th/search/%E0%B8%AD%E0%B8%B2%E0%B8%AB%E0%B8%B2%E0%B8%A3%E0%B8%84%E0%B8%A5%E0%B8%B5%E0%B8%99">อาหารคลีน</a>
      </li>
      <li class="inline mr-sm">
        <a data-controller="link-rewrite" data-action="link-rewrite#appendURLParams" data-link-rewrite-params-value="{&quot;event&quot;:&quot;search.footer_keyword&quot;}" href="/th/search/%E0%B8%AD%E0%B8%B2%E0%B8%AB%E0%B8%B2%E0%B8%A3%E0%B9%80%E0%B8%8A%E0%B9%89%E0%B8%B2">อาหารเช้า</a>
      </li>
      <li class="inline mr-sm">
        <a data-controller="link-rewrite" data-action="link-rewrite#appendURLParams" data-link-rewrite-params-value="{&quot;event&quot;:&quot;search.footer_keyword&quot;}" href="/th/search/%E0%B8%9A%E0%B8%B1%E0%B8%A7%E0%B8%A5%E0%B8%AD%E0%B8%A2">บัวลอย</a>
      </li>
      <li class="inline mr-sm">
        <a data-controller="link-rewrite" data-action="link-rewrite#appendURLParams" data-link-rewrite-params-value="{&quot;event&quot;:&quot;search.footer_keyword&quot;}" href="/th/search/%E0%B8%95%E0%B9%89%E0%B8%A1%E0%B8%88%E0%B8%B1%E0%B8%9A%E0%B8%89%E0%B9%88%E0%B8%B2%E0%B8%A2">ต้มจับฉ่าย</a>
      </li>
      <li class="inline mr-sm">
        <a data-controller="link-rewrite" data-action="link-rewrite#appendURLParams" data-link-rewrite-params-value="{&quot;event&quot;:&quot;search.footer_keyword&quot;}" href="/th/search/%E0%B8%81%E0%B8%B4%E0%B8%99%E0%B9%80%E0%B8%A5%E0%B9%88%E0%B8%99">กินเล่น</a>
      </li>
      <li class="inline mr-sm">
        <a data-controller="link-rewrite" data-action="link-rewrite#appendURLParams" data-link-rewrite-params-value="{&quot;event&quot;:&quot;search.footer_keyword&quot;}" href="/th/search/%E0%B8%82%E0%B8%99%E0%B8%A1%E0%B8%88%E0%B8%B5%E0%B8%99">ขนมจีน</a>
      </li>
      <li class="inline mr-sm">
        <a data-controller="link-rewrite" data-action="link-rewrite#appendURLParams" data-link-rewrite-params-value="{&quot;event&quot;:&quot;search.footer_keyword&quot;}" href="/th/search/%E0%B8%AA%E0%B8%A5%E0%B8%B1%E0%B8%94%E0%B9%82%E0%B8%A3%E0%B8%A5">สลัดโรล</a>
      </li>
      <li class="inline mr-sm">
        <a data-controller="link-rewrite" data-action="link-rewrite#appendURLParams" data-link-rewrite-params-value="{&quot;event&quot;:&quot;search.footer_keyword&quot;}" href="/th/search/%E0%B8%A7%E0%B8%B8%E0%B9%89%E0%B8%99">วุ้น</a>
      </li>
      <li class="inline mr-sm">
        <a data-controller="link-rewrite" data-action="link-rewrite#appendURLParams" data-link-rewrite-params-value="{&quot;event&quot;:&quot;search.footer_keyword&quot;}" href="/th/search/%E0%B8%A2%E0%B8%B3%E0%B8%82%E0%B8%99%E0%B8%A1%E0%B8%88%E0%B8%B5%E0%B8%99">ยำขนมจีน</a>
      </li>
      <li class="inline mr-sm">
        <a data-controller="link-rewrite" data-action="link-rewrite#appendURLParams" data-link-rewrite-params-value="{&quot;event&quot;:&quot;search.footer_keyword&quot;}" href="/th/search/%E0%B8%81%E0%B8%A5%E0%B9%89%E0%B8%A7%E0%B8%A2">กล้วย</a>
      </li>
      <li class="inline mr-sm">
        <a data-controller="link-rewrite" data-action="link-rewrite#appendURLParams" data-link-rewrite-params-value="{&quot;event&quot;:&quot;search.footer_keyword&quot;}" href="/th/search/%E0%B8%A2%E0%B9%8D%E0%B8%B2%E0%B8%A7%E0%B8%B8%E0%B9%89%E0%B8%99%E0%B9%80%E0%B8%AA%E0%B9%89%E0%B8%99">ยําวุ้นเส้น</a>
      </li>
      <li class="inline mr-sm">
        <a data-controller="link-rewrite" data-action="link-rewrite#appendURLParams" data-link-rewrite-params-value="{&quot;event&quot;:&quot;search.footer_keyword&quot;}" href="/th/search/%E0%B8%81%E0%B8%B8%E0%B9%89%E0%B8%87%E0%B8%AD%E0%B8%9A%E0%B8%A7%E0%B8%B8%E0%B9%89%E0%B8%99%E0%B9%80%E0%B8%AA%E0%B9%89%E0%B8%99">กุ้งอบวุ้นเส้น</a>
      </li>
      <li class="inline mr-sm">
        <a data-controller="link-rewrite" data-action="link-rewrite#appendURLParams" data-link-rewrite-params-value="{&quot;event&quot;:&quot;search.footer_keyword&quot;}" href="/th/search/%E0%B8%82%E0%B9%89%E0%B8%B2%E0%B8%A7%E0%B8%9C%E0%B8%B1%E0%B8%94">ข้าวผัด</a>
      </li>
      <li class="inline mr-sm">
        <a data-controller="link-rewrite" data-action="link-rewrite#appendURLParams" data-link-rewrite-params-value="{&quot;event&quot;:&quot;search.footer_keyword&quot;}" href="/th/search/%E0%B9%81%E0%B8%81%E0%B8%87%E0%B8%AA%E0%B9%89%E0%B8%A1">แกงส้ม</a>
      </li>
      <li class="inline mr-sm">
        <a data-controller="link-rewrite" data-action="link-rewrite#appendURLParams" data-link-rewrite-params-value="{&quot;event&quot;:&quot;search.footer_keyword&quot;}" href="/th/search/%E0%B9%84%E0%B8%82%E0%B9%88%E0%B8%95%E0%B8%B8%E0%B9%8B%E0%B8%99">ไข่ตุ๋น</a>
      </li>
      <li class="inline mr-sm">
        <a data-controller="link-rewrite" data-action="link-rewrite#appendURLParams" data-link-rewrite-params-value="{&quot;event&quot;:&quot;search.footer_keyword&quot;}" href="/th/search/%E0%B8%84%E0%B8%A7%E0%B8%B4%E0%B8%99%E0%B8%B1%E0%B8%A7">ควินัว</a>
      </li>
      <li class="inline mr-sm">
        <a data-controller="link-rewrite" data-action="link-rewrite#appendURLParams" data-link-rewrite-params-value="{&quot;event&quot;:&quot;search.footer_keyword&quot;}" href="/th/search/%E0%B9%80%E0%B8%84%E0%B9%89%E0%B8%81%E0%B8%AA%E0%B9%89%E0%B8%A1">เค้กส้ม</a>
      </li>
      <li class="inline mr-sm">
        <a data-controller="link-rewrite" data-action="link-rewrite#appendURLParams" data-link-rewrite-params-value="{&quot;event&quot;:&quot;search.footer_keyword&quot;}" href="/th/search/%E0%B8%81%E0%B9%8B%E0%B8%A7%E0%B8%A2%E0%B9%80%E0%B8%95%E0%B8%B5%E0%B9%8B%E0%B8%A2%E0%B8%A7">ก๋วยเตี๋ยว</a>
      </li>
      <li class="inline mr-sm">
        <a data-controller="link-rewrite" data-action="link-rewrite#appendURLParams" data-link-rewrite-params-value="{&quot;event&quot;:&quot;search.footer_keyword&quot;}" href="/th/search/%E0%B8%AA%E0%B9%80%E0%B8%95%E0%B9%87%E0%B8%81">สเต็ก</a>
      </li>
      <li class="inline mr-sm">
        <a data-controller="link-rewrite" data-action="link-rewrite#appendURLParams" data-link-rewrite-params-value="{&quot;event&quot;:&quot;search.footer_keyword&quot;}" href="/th/search/%E0%B8%8B%E0%B8%B8%E0%B8%9B">ซุป</a>
      </li>
      <li class="inline mr-sm">
        <a data-controller="link-rewrite" data-action="link-rewrite#appendURLParams" data-link-rewrite-params-value="{&quot;event&quot;:&quot;search.footer_keyword&quot;}" href="/th/search/%E0%B8%82%E0%B9%89%E0%B8%B2%E0%B8%A7%E0%B8%84%E0%B8%A5%E0%B8%B8%E0%B8%81%E0%B8%81%E0%B8%B0%E0%B8%9B%E0%B8%B4">ข้าวคลุกกะปิ</a>
      </li>
      <li class="inline mr-sm">
        <a data-controller="link-rewrite" data-action="link-rewrite#appendURLParams" data-link-rewrite-params-value="{&quot;event&quot;:&quot;search.footer_keyword&quot;}" href="/th/search/%E0%B8%A3%E0%B8%B2%E0%B8%94%E0%B8%AB%E0%B8%99%E0%B9%89%E0%B8%B2">ราดหน้า</a>
      </li>
      <li class="inline mr-sm">
        <a data-controller="link-rewrite" data-action="link-rewrite#appendURLParams" data-link-rewrite-params-value="{&quot;event&quot;:&quot;search.footer_keyword&quot;}" href="/th/search/%E0%B8%99%E0%B9%89%E0%B9%8D%E0%B8%B2%E0%B8%9E%E0%B8%A3%E0%B8%B4%E0%B8%81%E0%B8%81%E0%B8%B0%E0%B8%9B%E0%B8%B4">น้ําพริกกะปิ</a>
      </li>
      <li class="inline mr-sm">
        <a data-controller="link-rewrite" data-action="link-rewrite#appendURLParams" data-link-rewrite-params-value="{&quot;event&quot;:&quot;search.footer_keyword&quot;}" href="/th/search/%E0%B8%AA%E0%B8%95%E0%B8%A3%E0%B8%AD%E0%B9%80%E0%B8%9A%E0%B8%AD%E0%B8%A3%E0%B8%B5%E0%B9%88">สตรอเบอรี่</a>
      </li>
      <li class="inline mr-sm">
        <a data-controller="link-rewrite" data-action="link-rewrite#appendURLParams" data-link-rewrite-params-value="{&quot;event&quot;:&quot;search.footer_keyword&quot;}" href="/th/search/%E0%B8%82%E0%B8%99%E0%B8%A1%E0%B8%9B%E0%B8%B1%E0%B8%87%E0%B8%AB%E0%B8%99%E0%B9%89%E0%B8%B2%E0%B8%AB%E0%B8%A1%E0%B8%B9">ขนมปังหน้าหมู</a>
      </li>
      <li class="inline mr-sm">
        <a data-controller="link-rewrite" data-action="link-rewrite#appendURLParams" data-link-rewrite-params-value="{&quot;event&quot;:&quot;search.footer_keyword&quot;}" href="/th/search/%E0%B9%80%E0%B8%9F%E0%B8%A3%E0%B8%99%E0%B8%9F%E0%B8%A3%E0%B8%B2%E0%B8%A2">เฟรนฟราย</a>
      </li>
      <li class="inline mr-sm">
        <a data-controller="link-rewrite" data-action="link-rewrite#appendURLParams" data-link-rewrite-params-value="{&quot;event&quot;:&quot;search.footer_keyword&quot;}" href="/th/search/%E0%B8%99%E0%B9%89%E0%B9%8D%E0%B8%B2%E0%B8%88%E0%B8%B4%E0%B9%89%E0%B8%A1%E0%B9%81%E0%B8%88%E0%B9%88%E0%B8%A7">น้ําจิ้มแจ่ว</a>
      </li>
      <li class="inline mr-sm">
        <a data-controller="link-rewrite" data-action="link-rewrite#appendURLParams" data-link-rewrite-params-value="{&quot;event&quot;:&quot;search.footer_keyword&quot;}" href="/th/search/%E0%B8%88%E0%B8%B1%E0%B8%9A%E0%B8%89%E0%B9%88%E0%B8%B2%E0%B8%A2">จับฉ่าย</a>
      </li>
      <li class="inline mr-sm">
        <a data-controller="link-rewrite" data-action="link-rewrite#appendURLParams" data-link-rewrite-params-value="{&quot;event&quot;:&quot;search.footer_keyword&quot;}" href="/th/search/%E0%B8%82%E0%B8%99%E0%B8%A1%E0%B9%80%E0%B8%9B%E0%B8%B5%E0%B9%8A%E0%B8%A2%E0%B8%B0">ขนมเปี๊ยะ</a>
      </li>
      <li class="inline mr-sm">
        <a data-controller="link-rewrite" data-action="link-rewrite#appendURLParams" data-link-rewrite-params-value="{&quot;event&quot;:&quot;search.footer_keyword&quot;}" href="/th/search/%E0%B8%AB%E0%B8%A1%E0%B8%B9%E0%B9%81%E0%B8%94%E0%B8%87">หมูแดง</a>
      </li>
      <li class="inline mr-sm">
        <a data-controller="link-rewrite" data-action="link-rewrite#appendURLParams" data-link-rewrite-params-value="{&quot;event&quot;:&quot;search.footer_keyword&quot;}" href="/th/search/%E0%B9%84%E0%B8%81%E0%B9%88%E0%B8%95%E0%B9%89%E0%B8%A1">ไก่ต้ม</a>
      </li>
      <li class="inline mr-sm">
        <a data-controller="link-rewrite" data-action="link-rewrite#appendURLParams" data-link-rewrite-params-value="{&quot;event&quot;:&quot;search.footer_keyword&quot;}" href="/th/search/%E0%B8%AB%E0%B8%A1%E0%B9%89%E0%B8%AD%E0%B8%97%E0%B8%AD%E0%B8%94%E0%B9%84%E0%B8%A3%E0%B9%89%E0%B8%99%E0%B8%B3%E0%B9%89%E0%B8%A1%E0%B8%B1%E0%B8%99">หม้อทอดไร้นำ้มัน</a>
      </li>
      <li class="inline mr-sm">
        <a data-controller="link-rewrite" data-action="link-rewrite#appendURLParams" data-link-rewrite-params-value="{&quot;event&quot;:&quot;search.footer_keyword&quot;}" href="/th/search/air%20fryer">Air fryer</a>
      </li>
      <li class="inline mr-sm">
        <a data-controller="link-rewrite" data-action="link-rewrite#appendURLParams" data-link-rewrite-params-value="{&quot;event&quot;:&quot;search.footer_keyword&quot;}" href="/th/search/%E0%B9%81%E0%B8%9B%E0%B9%89%E0%B8%87%E0%B8%82%E0%B9%89%E0%B8%B2%E0%B8%A7%E0%B9%80%E0%B8%88%E0%B9%89%E0%B8%B2">แป้งข้าวเจ้า</a>
      </li>
      <li class="inline mr-sm">
        <a data-controller="link-rewrite" data-action="link-rewrite#appendURLParams" data-link-rewrite-params-value="{&quot;event&quot;:&quot;search.footer_keyword&quot;}" href="/th/search/%E0%B9%81%E0%B8%9B%E0%B9%89%E0%B8%87%E0%B8%82%E0%B9%89%E0%B8%B2%E0%B8%A7%E0%B9%80%E0%B8%AB%E0%B8%99%E0%B8%B5%E0%B8%A2%E0%B8%A7">แป้งข้าวเหนียว</a>
      </li>
      <li class="inline mr-sm">
        <a data-controller="link-rewrite" data-action="link-rewrite#appendURLParams" data-link-rewrite-params-value="{&quot;event&quot;:&quot;search.footer_keyword&quot;}" href="/th/search/%E0%B8%82%E0%B9%89%E0%B8%B2%E0%B8%A7%E0%B9%82%E0%B8%AD%E0%B9%8A%E0%B8%95">ข้าวโอ๊ต</a>
      </li>
      <li class="inline mr-sm">
        <a data-controller="link-rewrite" data-action="link-rewrite#appendURLParams" data-link-rewrite-params-value="{&quot;event&quot;:&quot;search.footer_keyword&quot;}" href="/th/search/%E0%B8%82%E0%B9%89%E0%B8%B2%E0%B8%A7%E0%B9%80%E0%B8%AB%E0%B8%99%E0%B8%B5%E0%B8%A2%E0%B8%A7%E0%B9%80%E0%B8%9B%E0%B8%B5%E0%B8%A2%E0%B8%81%E0%B8%A5%E0%B8%B3%E0%B9%84%E0%B8%A2">ข้าวเหนียวเปียกลำไย</a>
      </li>
      <li class="inline mr-sm">
        <a data-controller="link-rewrite" data-action="link-rewrite#appendURLParams" data-link-rewrite-params-value="{&quot;event&quot;:&quot;search.footer_keyword&quot;}" href="/th/search/%E0%B8%AD%E0%B8%B0%E0%B9%82%E0%B8%A7%E0%B8%84%E0%B8%B2%E0%B9%82%E0%B8%94">อะโวคาโด</a>
      </li>
      <li class="inline mr-sm">
        <a data-controller="link-rewrite" data-action="link-rewrite#appendURLParams" data-link-rewrite-params-value="{&quot;event&quot;:&quot;search.footer_keyword&quot;}" href="/th/search/%E0%B8%AA%E0%B8%B0%E0%B8%95%E0%B8%AD">สะตอ</a>
      </li>
      <li class="inline mr-sm">
        <a data-controller="link-rewrite" data-action="link-rewrite#appendURLParams" data-link-rewrite-params-value="{&quot;event&quot;:&quot;search.footer_keyword&quot;}" href="/th/search/%E0%B8%84%E0%B8%B5%E0%B9%82%E0%B8%95">คีโต</a>
      </li>
      <li class="inline mr-sm">
        <a data-controller="link-rewrite" data-action="link-rewrite#appendURLParams" data-link-rewrite-params-value="{&quot;event&quot;:&quot;search.footer_keyword&quot;}" href="/th/search/%E0%B8%81%E0%B8%B4%E0%B8%99%E0%B9%80%E0%B8%88">กินเจ</a>
      </li>
      <li class="inline mr-sm">
        <a data-controller="link-rewrite" data-action="link-rewrite#appendURLParams" data-link-rewrite-params-value="{&quot;event&quot;:&quot;search.footer_keyword&quot;}" href="/th/search/%E0%B8%AD%E0%B8%B2%E0%B8%AB%E0%B8%B2%E0%B8%A3%E0%B8%AA%E0%B8%B8%E0%B8%82%E0%B8%A0%E0%B8%B2%E0%B8%9E">อาหารสุขภาพ</a>
      </li>
  </ul>
</div>

  
  <ul class="md:float-right">
  <li class="px-xs inline-block"><a href="/th/japanese_site">日本</a></li>
  <li class="px-xs inline-block"><a href="/es/regions#es">Español</a></li>
  <li class="px-xs inline-block"><a href="/us/regions#en">English</a></li>
  <li class="px-xs inline-block"><a href="/id">Indonesia</a></li>
  <li class="px-xs inline-block"><a href="/sa/regions#ar">العربية</a></li>
  <li class="px-xs inline-block"><a href="/vn">Việt Nam</a></li>
  <li class="px-xs inline-block"><a href="/th">ไทย</a></li>
  <li class="px-xs inline-block">
    <a class="bg-cookpad-gray-300 text-cookpad-gray-700 no-underline hover:text-cookpad-white hover:bg-cookpad-gray-500 px-sm pb-xs" title="แสดงประเทศอื่นๆ" href="/th/regions">...</a>
  </li>
</ul>


  <div class="mt-md sm:mt-rg md:mt-0">
    Copyright © Cookpad Inc. สงวนลิขสิทธิ์
    <a class="ml-xs" href="mailto:info-th@cookpad.com?subject=%5Bfeedback%5D%20cookpad.com">ข้อเสนอแนะ</a>
  </div>

</footer>

        </div>

        <!-- Fixed elements -->
        

        <div class=" sticky bottom-0 z-30 print:hidden">
                <div id="bottom_navigation" class="js__rich bottom-navigation bg-cookpad-white border-t border-cookpad-gray-200 print:hidden sm:hidden">
    <ul class="py-xs text-cookpad-24 flex justify-around text-cookpad-gray-500">
      <li>
        <a title="หน้าแรก" href="/th/suggested_feed_items#feed">
  <div class="text-center">
    <div class="m-0 p-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="mise-icon mise-icon-home-unselected"><path d="M5 9v5.6c0 2.24 0 3.36.436 4.216a4 4 0 0 0 1.748 1.748C8.04 21 9.16 21 11.4 21h1.2c2.24 0 3.36 0 4.216-.436a4 4 0 0 0 1.748-1.748C19 17.96 19 16.84 19 14.6V9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="m2 12 7.737-7.737c.792-.792 1.188-1.188 1.645-1.337a2 2 0 0 1 1.236 0c.457.149.853.545 1.645 1.337L22 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
</div>
  </div>
</a>
      </li>

      <li>
          <a title="เขียนสูตร" href="/th/create">
  <div class="text-center">
    <div class="m-0 p-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="mise-icon mise-icon-plus-create-unselected"><path d="M12 8v8M8 12h8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><rect x="2" y="2" width="20" height="20" rx="4" stroke="currentColor" stroke-width="1.5"></rect></svg>
</div>
  </div>
</a>
      </li>

      <li class="relative">
        <a title="แจ้งเตือน" href="/th/inbox">
  <div class="text-center">
    <div class="m-0 p-0"><span class="counter top-0 right-0 -mt-xs -mr-xs" aria-label="การแจ้งเตือนที่ยังไม่ได้อ่าน" data-header-notifications-url="/th/inbox/count" data-controller="header-notifications"> </span>
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="mise-icon mise-icon-comment"><path d="M16 4H8a4 4 0 0 0-4 4v4.8a4 4 0 0 0 4 4h7.143a4 4 0 0 1 2.829 1.172l1.516 1.516a.3.3 0 0 0 .512-.212V8a4 4 0 0 0-4-4z" stroke="currentColor" stroke-width="1.5"></path></svg>

</div>
  </div>
</a>
      </li>
    </ul>
  </div>



        </div>
      </div>

      <div class="alert alert--danger fixed text-center z-50 w-64 bottom-0 mb-lg inset-x-0 mx-auto fade-in-out" id="growl"></div>
    </div>

    

    <div id="modals">
      
    </div>

    <script>
  ga("create", "UA-54780007-5", "auto");
      ga("set", "&uid", "29512510");
  ga("set", "dimension1", "cookpad-thailand");
  ga("set", "dimension4", "e7268590-761a-4814-a58c-73878695f1a1");
  ga("send", "pageview", window.location.pathname);

  ga("create", "UA-54780007-14", "auto", "sampledTracker", {"sampleRate": 10});
  ga("sampledTracker.send", "pageview", window.location.pathname);
</script>

      <noscript>
    <div style="position:fixed; top:0; left:0; display:none" width="1" height="1">
      <img alt="PxPixel" src="//assets-global.cpcdn.com/FqtAw5et/xhr/api/v1/collector/noScript.gif?appId=PXFqtAw5et" />
    </div>
  </noscript>

    
  

</body>