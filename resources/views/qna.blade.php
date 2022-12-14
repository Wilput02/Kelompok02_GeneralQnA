<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ $title }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta property="twitter:card" content="summary_large_image" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./js/qna.js" type="text/javascript"></script>
    <style data-tag="reset-style-sheet">
      html { line-height: 1.15;}body {  margin: 0;}* {  box-sizing: border-box;  border-width: 0;  border-style: solid;}p,li,ul,pre,div,h1,h2,h3,h4,h5,h6,figure,blockquote,figcaption {  margin: 0;  padding: 0;}button {  background-color: transparent;}button,input,optgroup,select,textarea {  font-family: inherit;  font-size: 100%;  line-height: 1.15;  margin: 0;}button,select {  text-transform: none;}button,[type="button"],[type="reset"],[type="submit"] {  -webkit-appearance: button;}button::-moz-focus-inner,[type="button"]::-moz-focus-inner,[type="reset"]::-moz-focus-inner,[type="submit"]::-moz-focus-inner {  border-style: none;  padding: 0;}button:-moz-focus,[type="button"]:-moz-focus,[type="reset"]:-moz-focus,[type="submit"]:-moz-focus {  outline: 1px dotted ButtonText;}a {  color: inherit;  text-decoration: inherit;}input {  padding: 2px 4px;}img {  display: block;}html { scroll-behavior: smooth  }
    </style>
    <style data-tag="default-style-sheet">
      html {
        font-family: Inter;
        font-size: 16px;
      }
      body {
        font-weight: 400;
        font-style:normal;
        text-decoration: none;
        text-transform: none;
        letter-spacing: normal;
        line-height: 1.15;
        color: var(--dl-color-gray-black);
        background-color: var(--dl-color-gray-white);

      }
    </style>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Cardo:ital,wght@0,400;0,700;1,400&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
      data-tag="font"
    />
    <link rel="stylesheet" href="./css/style.css" />
</head>
<body>
  <script>
    AOS.init({
      delay: 0, 
      duration: 600, 
      easing: 'ease-out',
    });
  </script>  
  <div>
      <link href="./css/q-a-part1wireframe.css" rel="stylesheet" />
      <div class="q-a-part1wireframe-container">
        <div class="q-a-part1wireframe-header">
          <div class="q-a-part1wireframe-container01" data-aos="zoom-in" data-aos-delay="200">
            <span class="q-a-part1wireframe-text"><span>Home</span></span>
          </div>
          <div class="q-a-part1wireframe-container02" data-aos="zoom-in" data-aos-delay="200">
            <span class="q-a-part1wireframe-text02"><span>Q&amp;A</span></span>
          </div>
          <div class="q-a-part1wireframe-container03" data-aos="zoom-out" data-aos-delay="300">
            <img
              alt="uilcommentquestion1172"
              src="./playground_assets/uilcommentquestion1172-568v.svg"
              class="q-a-part1wireframe-uilcommentquestion"
            />
          </div>
          <div class="q-a-part1wireframe-container04" data-aos="zoom-in" data-aos-delay="200">
            <span class="q-a-part1wireframe-text04"><span>Help</span></span>
          </div>
          <div class="q-a-part1wireframe-container05" data-aos="zoom-in" data-aos-delay="200">
            <span class="q-a-part1wireframe-text06"><span>About</span></span>
          </div>
        </div>
        <div id="test">
          <div class="q-a-part1wireframe-content1">
            <div class="q-a-part1wireframe-container06">
              <div class="q-a-part1wireframe-container07">
                <div class="q-a-part1wireframe-container08">
                  <div class="q-a-part1wireframe-container09">
                    <span class="q-a-part1wireframe-text08" data-aos="fade-up" data-aos-delay="300">
                      <span>
                        <span>Many Ask</span>
                        <br />
                        <span>A Lot Know</span>
                      </span>
                    </span>
                  </div>
                  <div class="q-a-part1wireframe-container10">
                    <span class="q-a-part1wireframe-text13" data-aos="fade-up" data-aos-delay="325">
                      <span>
                        Find answers to an article context, so you 
                        can understand the intent of the delivery 
                        in that context
                      </span>
                    </span>
                  </div>
                </div>
                <div class="q-a-part1wireframe-container11" data-aos="zoom-out" data-aos-delay="325">
                  <img
                    alt="image"
                    src="./playground_assets/illustration%20-%20reading.svg"
                    class="q-a-part1wireframe-image"
                  />
                </div>
              </div>
              <form class="form-qna" enctype="multipart/form-data">
                @csrf
                <div class="q-a-part1wireframe-container12">
                  <div class="q-a-part1wireframe-container13" data-aos="fade-up" data-aos-delay="325">
                    <div class="q-a-part1wireframe-container14">
                      <span class="q-a-part1wireframe-text15">
                        <span>Context</span>
                      </span>
                    </div>
                    <div class="q-a-part1wireframe-container15">
                      <textarea
                        placeholder="Enter your context"
                        name = "context"
                        id = "contextqina"
                        class="q-a-part1wireframe-textarea input-context"
                      ></textarea>
                    </div>
                    <div class="invalid-feedback context"></div>
                  </div>
                </div>
                <div class="q-a-part1wireframe-container16">
                  <div class="q-a-part1wireframe-container17" data-aos="fade-up" data-aos-delay="325">
                    <div class="q-a-part1wireframe-container18">
                      <span class="q-a-part1wireframe-text17">
                        <span>Question</span>
                      </span>
                    </div>
                    <div class="q-a-part1wireframe-container19">
                      <input
                        type="text"
                        name = "question"
                        id = "questionqina"
                        placeholder="Enter your question"
                        class="q-a-part1wireframe-textinput input-question"
                      />
                      <button type="submit" class="q-a-part1wireframe-button button" id="btnSubmit">
                        <img
                          alt="materialsymbolssearchrounded2044"
                          src="./playground_assets/materialsymbolssearchrounded2044-zckc.svg"
                          class="q-a-part1wireframe-materialsymbolssearchrounded"
                        />
                      </button>
                    </div>
                    <div class="invalid-feedback question"></div>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="q-a-part1wireframe-content2">
            <div class="q-a-part1wireframe-container20" id="answer-pt">
              <div class="q-a-part1wireframe-container21">
                <div class="q-a-part1wireframe-container22">
                  <span class="q-a-part1wireframe-text19"data-aos="fade-up" data-aos-delay="325">
                    <span>Your Answer</span>
                  </span>
                </div>
              </div>
              <div class="q-a-part1wireframe-container23">
                <div class="q-a-part1wireframe-container24">
                  <span class="q-a-part1wireframe-text21" data-aos="fade-up" data-aos-delay="325">
                    Here are the answers we were able to find 
                    from the question based on the context and the statement you previously entered
                  </span>
                </div>
              </div>
              <div class="q-a-part1wireframe-container25" data-aos="fade-up" data-aos-delay="325">
                <div class="q-a-part1wireframe-container26">
                  <img
                    alt="image"
                    src="./playground_assets/illustration%20-%20reading%20side.svg"
                    class="q-a-part1wireframe-image1"
                  />
                </div>
                <div class="q-a-part1wireframe-container27">
                  <div class="q-a-part1wireframe-container28">
                    <span class="q-a-part1wireframe-text22">
                        Amet minim mollit non deserunt ullamco est sit aliqua
                        dolor do amet sint ?
                    </span>
                  </div>
                  <div class="q-a-part1wireframe-container29">
                    <span class="q-a-part1wireframe-text24">
                      <span>
                        Amet minim mollit non deserunt ullamco est sit aliqua
                        dolor do amet sint.
                      </span>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="q-a-part1wireframe-footer">
          <img
            alt="uilcommentquestion1242"
            src="./playground_assets/uilcommentquestion1242-qime.svg"
            class="q-a-part1wireframe-uilcommentquestion1"
          />
        </div>
      </div>
    </div>
</body>
</html>
