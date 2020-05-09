<?php
  include_once '../common/config.php';
  include_once '../common/methods.php';
  define("NAVBAR_COLOR",'light');
  define("HEADER_TYPE",'blogpost');
  define("BG_IMG_MD",'photography/SD_N18_7039_2_Web.jpg');
  define("BG_IMG_LG",'large/SD_N18_7039_2_Web_Large.jpg');
  define("SITE_TITLE",'How to Color Grade Your Photographs to Make Art');
  define("SITE_SUBTITLE",'&quot;You don&apos;t take a photograph, you make it.&quot; &mdash; Ansel Adams');
  define("SITE_SUBSUBTITLE",'Posted on April 2, 2020');
  $og_image = PATH.'/images/blog/Blog_ColorGrade_OG.jpg';
?>
<!doctype html>
<?php
  include_once '../common/htmlTag.php';
?>
<head>
    <?php include_once '../common/head.php';?>
    <title>How to Color Grade Your Photographs to Make Art | Blog - Skyler Dong</title>
</head>
<body>
<?php
  include_once '../common/navbar.php';
  include_once '../common/header.php';
?>
<!-- Blog Content -->
<div class="container maincontent">
  <div class="row">
    <div class="col-12 mx-auto col-md-10">
      <div class="toc_container mb-5">
        <p class="toc_title">Contents</p>
        <ul class="toc_list">
          <li><a href="#blog-color-grading-key-points">Key points</a></li>
          <li><a href="#blog-color-grading-why">Why we do color grading?</a></li>
          <li><a href="#blog-color-grading-what">What is color grading?</a></li>
          <li><a href="#blog-color-grading-art">What is art?</a>
          <li><a href="#blog-color-grading-how">How to do color grading?</a></li>
          <li><a href="#blog-color-grading-bold">Go bold with color grading</a></li>
          <li><a href="#blog-color-grading-technical">Technical considerations</a></li>
          <li><a href="#blog-color-grading-more-examples">More before-and-after examples</a></li>
          <li><a href="#blog-color-grading-final-words">Final words</a></li>
        </ul>
      </div><!--TOC CONTAINER-->
      <div class="mb-5"><h2 id="blog-color-grading-key-points" class="anchor">Key points</h2>
        <ul>
          <li><p><a href="#blog-color-grading-what">Color grading</a> photos can significantly enhance the delivery of the message, as <a href="#blog-color-grading-why">raw photos are flat and washed out to our eyes.</a></p></li>
          <li><p><a href="#blog-color-grading-how">The basic technique is rather simple</a> with <a href="#blog-color-grading-technical">paid and free software available</a>.</p></li>
          <li><p>The difficult part is to <a href="#blog-color-grading-art">free your mind</a>, <a href="#blog-color-grading-bold">use your imagination</a> and envision the final photo before you press the shutter.</p></li>
          <li><p>I'll show you how to do basic color grading with examples but without theories. The point is to encourage you to be a better artist.</p></li>
        </ul>
      </div><!--blog-color-grading-key-points-->
      <div class="mb-5"><h2 id="blog-color-grading-why" class="anchor">Why we do color grading?</h2>
        <p>A picture is worth a thousand words, so let me show you four thousand words first.</p>
        <div class="row photo-block">
          <div class="col-md-6 mx-auto">
            <a href="https://skylerdong.com/photography/?photo=photoid_100" target="_blank">
            <?php loadImage_blog('SD_N18_5767_2_Web_raw.jpg');?>
            </a>
            <div class="text-center"><p>Before: The Wave, Arizona. Raw photo from camera without any post-processing or cropping.</p></div>
          </div>
          <div class="col-md-6 mx-auto">
            <a href="https://skylerdong.com/photography/?photo=photoid_100" target="_blank">
            <?php loadImage_photography('SD_N18_5767_2_Web.jpg');?>
            </a>
            <div class="text-center"><p>After: The Wave, Arizona.</p></div>
          </div>
        </div><!--ROW-->
        <div class="row photo-block">
          <div class="col-md-6 mx-auto">
            <a href="https://skylerdong.com/photography/?photo=photoid_83" target="_blank">
            <?php loadImage_blog('SD__A7T2560_Web_raw.jpg');?>
            </a>
            <div class="text-center"><p>Before: Vintage Chevy.</p></div>
          </div>
          <div class="col-md-6 mx-auto">
            <a href="https://skylerdong.com/photography/?photo=photoid_83" target="_blank">
            <?php loadImage_photography('SD__A7T2560_Edit_2_Web.jpg');?>
            </a>
            <div class="text-center"><p>After: Vintage Chevy.</p></div>
          </div>
        </a>
        </div><!--ROW-->
        <p>Now let's take the cover photo for an in-depth demonstration, which is also included in <a href="../photography" target="_blank">my photo gallery</a>. Take a look at the following 2 photos.</p>
        <p>Which one do you like better?</p>
        <div class="row photo-block">
          <div class="col-md-6 mx-auto">
            <a href="https://skylerdong.com/photography/?photo=photoid_61" target="_blank">
            <?php loadImage_blog('SD_N18_7039_2_Web_raw.jpg');?>
            </a>
            <div class="text-center"><p>Photo 1. Before: Big Bend National Park, Texas. As-is condition from camera without any post-processing or cropping.</p></div>
          </div>
          <div class="col-md-6 mx-auto">
            <a href="https://skylerdong.com/photography/?photo=photoid_61" target="_blank">
            <?php loadImage_photography('SD_N18_7039_2_Web.jpg');?>
            </a>
            <div class="text-center"><p>Photo 2. After: Big Bend National Park, Texas. Although this photo might seem to be a little too much, it is because it's right next to its before photo (Photo 1), which is simply too raw, so our brain started to overcompensate. If you look at this photo in <a href="https://skylerdong.com/photography/?photo=photoid_61" target="_blank">my photo gallery</a>, it's quite coherent.</p></div>
          </div>
        </a>
        </div><!--ROW-->
        <p>Well, it is subjective. Personally, I like Photo 2 &mdash; because I was purposely going for that way.</p>
        <blockquote>I wanted to create a slightly surrealistic Wild West feel in Photo 2, like the tone you see in <a href="https://en.wikipedia.org/wiki/Western_(genre)" target="_blank">Western films</a>, such as <a href="https://en.wikipedia.org/wiki/The_Good,_the_Bad_and_the_Ugly" target="_blank">The Good, the Bad and the Ugly</a> and <a href="https://en.wikipedia.org/wiki/No_Country_for_Old_Men_(film)" target="_blank">No Country for Old Men</a>.</blockquote>
        <p>The after photo (Photo 2) might seem to be enhanced too much, but it is because the before photo (Photo 1) &mdash; right next to it &mdash; is too raw and too flat. As a result, our brains kick in and start to overcompensate. If you look at Photo 2 as part of <a href="https://skylerdong.com/photography/?photo=photoid_61" target="_blank">my photo gallery</a> or on its own, it is quite coherent.</p>
        <p>On a side note, all color grading settings for all photos in this blog are tailored to small photo previews on screens (maximum 800 pixels on the long edge) for applications like <a href="https://www.instagram.com/skyler.dong.art/" target="_blank">Instagram</a> and <a href="../photography" target="_blank">my photo gallery</a> on this website. Small photo previews tend to be flat and lackluster, so I add a little more zing to them in post-processing. For larger sizes (such as for computer wallpapers) and prints, I'd tone it down and do a slightly different set of color grading.</p>
        <p>If you are reading this webpage at night with screen-warming functions turned on, such as Night Shift on Mac and iOS and Night Light on Windows, the colors of the photos would be distorted.</p>
        <p>I'm sure some people might prefer the as-is condition of Photo 1 from my camera without any processing or cropping (actually, from my smartphone camera).</p>
        <p>The raw photo (Photo 1) is actually quite good, although raw photos tend to be flat and washed out to our eyes. One of the reasons is that when we see things in the 3D world, our brains interpret what our eyes perceive and actively enhance visuals. It's like a post-processing on the fly, powered by blood sugar. However, when we see a 2D image, our brains don't have enough visual cues to make enough enhancement.</p>
        <p>But I think it's fair to say Photo 2 has a lot of more personalities and delivers a stronger message and a feeling of the good old Wild West, which was what I felt in my head when I was driving through Big Bend National Park. Also, the raw photo (Photo 1) carries a different message from my creation (Photo 2).</p>
        <blockquote>&quot;You don&apos;t take a photograph, you make it.&quot; &mdash; Ansel Adams.</blockquote>
        <p>You make a photograph (partly) by compensating for the flatness and enhancing the delivery of the message. Hence, we do post-processing on photos.</p>
        <p>This is rather an extreme example. Most of my before-and-after photos are not that dramatic, but it demonstrates the power of color grading in the delivery of the message. After all, Photos 1 and 2 are really the same photo just with and without makeups. I like them equally. Photo 1 is what the camera saw, and Photo 2 is what I saw in my imagination.</p>
        <p>There are <a href="#blog-color-grading-more-examples">more before-and-after examples in a later section</a>. You can jump ahead and take a look.</p>
      </div><!--WHY COLOR GRADING-->
      <div class="mb-5"><h2 id="blog-color-grading-what" class="anchor">What is color grading?</h2>
        <p>Color grading is the process of improving the appearance of an image presentation by adjusting various attributes of an image such as contrast, color, saturation, detail, black level and white point, according to <a href="https://en.wikipedia.org/wiki/Color_grading" target="_blank">Wikipedia</a>.</p>
        <p>Here, I use "color grading" and "color correction" loosely. Basically, it means that we alter the colors and the tone of a photo to achieve an artistic effect and enhance the delivery of the message.</p>
      </div><!--blog-what-is-color-grading-->
      <div class="mb-5"><h2 id="blog-color-grading-art" class="anchor">What is art?</h2>
        <p>What is art? This is a complicated question. In short, I think art is the artistic presentation that the artist presents, whether intentionally or arbitrarily. The artwork itself may be a realistic representation of the reality, an abstract derivation of the artist's subjective perception or anything in between.</p>
        <p>One might argue Photo 2 is unrealistic. But what is "reality?" Is what we see "reality?" If I was wearing a pair of brown sunglasses at Big Bend National Park, everything I saw would have a brown tint. Is that reality? What about <a href="https://en.wikipedia.org/wiki/Optical_illusion" target="_blank">optical illusions</a>? What about <a href="https://en.wikipedia.org/wiki/Blind_spot_(vision)" target="_blank">the blind spot on our retinae</a>? You see, the rabbit hole is quite deep, so I'm going to pause here.</p>
        <p>Although this section seems to be cliches, but this discussion is crucial. I'm trying to free your mind, as an artist, as a photographer, like Morpheus trying to free Neo's mind in the <a href="https://en.wikipedia.org/wiki/The_Matrix" target="_blank">Matrix</a> &mdash; which, by the way, has a beautifully unique greenish cinematography by <a href="https://en.wikipedia.org/wiki/Bill_Pope" target="_blank">Bill Pope</a> &mdash; and I don't mean I'm nearly as wise as Morpheus.</p>
        <blockquote>Free your mind. Use your imaginations. Develop your own taste.</blockquote>
        <p>What I'm saying is that you can do whatever you want to deliver your message. Don't be confined to the photo that your camera took. Use your imagination. Be bold. Play with exposure, contrast, colors and other settings in your post-processing. Lightroom or Photoshop presets that you downloaded are convenient and insightful. They can give you examples of what can be done on your photos, but you shouldn't feel trapped by these presets.</p>
        <p>Develop your own taste, which is the first step to developing your personal style. This takes a long time. It might take a few years or even more than a decade, but don't be discouraged. You still make stunning photos along the way.</p>
        <blockquote>Developing your own taste is not a destination; it is a journey.</blockquote>
      </div><!--blog-color-grading-art-->
      <div class="mb-5"><h2 id="blog-color-grading-how" class="anchor">How to do color grading?</h2>
        <p>Let me start with a more "normal" example. Let's consider the following two photos first. Stay with me here. I'll discuss the <a href="#blog-color-grading-technical">software requirement in a later section</a> &mdash; spoiler alert &mdash; free software available.</p>
        <div class="row photo-block">
          <div class="col-md-6 mx-auto">
            <a href="https://skylerdong.com/photography/?photo=photoid_100" target="_blank">
            <?php loadImage_blog('SD_N18_5767_2_Web_raw.jpg');?>
            </a>
            <div class="text-center"><p>Photo 3. The Wave, Arizona. Raw photo from camera without any post-processing or cropping.</p></div>
          </div>
          <div class="col-md-6 mx-auto">
            <a href="https://skylerdong.com/photography/?photo=photoid_100" target="_blank">
            <?php loadImage_photography('SD_N18_5767_2_Web.jpg');?>
            </a>
            <div class="text-center"><p>Photo 4. Same photo after post processing.</p></div>
          </div>
        </div><!--ROW-->
        <blockquote>I start with my imagination and a vision.</blockquote>
        <p>I ask myself what I want to present through the photograph. I correct the composition, such as by cropping. Then I start with adjusting the temperature and work my way down. Often, I go through several iterations. On a minor note, I do adjust curves, but it is beyond the scope of this blog, so I omitted curves in the following images for simplicity.</p>
        <div class="row photo-block">
          <div class="col-md-6 mx-auto">
            <?php loadImage_blog('SD_N18_5767_2_Web_basic.png');?>
            <div class="text-center"><p>Basic adjustments after post-processing in Adobe Lightroom Classic (Photo 4). The raw photo was taken at 5350 K temperature with +10 tint.</p></div>
          </div>
          <div class="col-md-6 mx-auto">
            <?php loadImage_blog('SD_N18_5767_2_Web_hsl.png');?>
            <div class="text-center"><p>Hue, saturation, luminance (HSL) adjustments after post-processing (Photo 4).</p></div>
          </div>
        </div><!--ROW-->
        <p>I increased the temperature slightly to bring out the warm color of the orange sandstone as a starting point. You can see all the adjustments I made.</p>
        <div class="row photo-block">
          <div class="col-md-6 mx-auto">
            <?php loadImage_blog('SD_N18_5767_2_Web_hist_before.png');?>
            <div class="text-center"><p>Histogram of raw photo (Photo 3).</p></div>
          </div>
          <div class="col-md-6 mx-auto">
            <?php loadImage_blog('SD_N18_5767_2_Web_hist_after.png');?>
            <div class="text-center"><p>Histogram after post-processing (Photo 4).</p></div>
          </div>
        </div><!--ROW-->
        <p>You might noticed that I did do a little cropping to enhance the composition. Although most cameras have a native sensor aspect ratio of 3:2, my final photos are rarely 3:2 (or 2:3). It's merely a personal preference. I do try to envision the final composition after cropping and accommodate it when I press the shutter, in order to retain the maximum amount of pixels after cropping.</p>
        <p>Now let's go back to the dramatic Wild West example. The raw photo isn't bad, but I want to present what I imagined in my head.</p>
        <div class="row photo-block">
          <div class="col-md-6 mx-auto">
            <a href="https://skylerdong.com/photography/?photo=photoid_61" target="_blank">
            <?php loadImage_blog('SD_N18_7039_2_Web_raw.jpg');?>
            </a>
            <div class="text-center"><p>Photo 1. Raw photo before post-processing.</p></div>
          </div>
          <div class="col-md-6 mx-auto">
            <a href="https://skylerdong.com/photography/?photo=photoid_61" target="_blank">
            <?php loadImage_photography('SD_N18_7039_2_Web.jpg');?>
            </a>
            <div class="text-center"><p>Photo 2. After post-processing. As I mentioned, although this photo might seem to be a little too much, it is because it's right next to its before photo (Photo 1), which is simply too raw, so our brain started to overcompensate. If you look at this photo as part of <a href="https://skylerdong.com/photography/?photo=photoid_61" target="_blank">my photo gallery</a>, it's quite coherent.</p></div>
          </div>
        </a>
        </div><!--ROW-->
        <div class="row photo-block">
          <div class="col-md-6 mx-auto">
            <?php loadImage_blog('SD_N18_7039_2_Web_basic.png');?>
            <div class="text-center"><p>Basic adjustments after post-processing in Adobe Lightroom Classic (Photo 2). The raw photo was taken at 5200 K temperature with +11 tint.</p></div>
          </div>
          <div class="col-md-6 mx-auto">
            <?php loadImage_blog('SD_N18_7039_2_Web_hsl.png');?>
            <div class="text-center"><p>Hue, saturation, luminance (HSL) adjustments after post-processing (Photo 2).</p></div>
          </div>
        </div><!--ROW-->
        <div class="row photo-block">
          <div class="col-md-6 mx-auto">
            <?php loadImage_blog('SD_N18_7039_2_Web_hist_before.png');?>
            <div class="text-center"><p>Histogram of raw photo (Photo 1).</p></div>
          </div>
          <div class="col-md-6 mx-auto">
            <?php loadImage_blog('SD_N18_7039_2_Web_hist_after.png');?>
            <div class="text-center"><p>Histogram after post-processing (Photo 2).</p></div>
          </div>
        </div><!--ROW-->
        <p>To finish the photo, I added a little vignetting to enhance the message.</p>
      </div><!--blog-color-grading-how--> 
      <div class="mb-5"><h2 id="blog-color-grading-bold" class="anchor">Go bold with color grading</h2>
        <p>Go bold. You're making art.</p>
        <p>Let me show you an example of some special effects that color grading can achieve to help the delivery of the message. Let's free our minds a little bit to make art.</p>
        <p>The following photo was taken at <a href="https://en.wikipedia.org/wiki/Prada_Marfa" target="_blank">Prada Marfa</a>, which isn't a Prada store, but a sculpture just off highway (U.S. Route 90 in Texas). The closest town is tens of miles away. It's bizarre to have a Prada store in the middle of nowhere.</p>
        <div class="row photo-block">
          <div class="col-md-6 mx-auto">
            <a href="https://skylerdong.com/photography/?photo=photoid_12" target="_blank">
            <?php loadImage_blog('SD_IMG_0803_Web_2_raw.jpg');?>
            </a>
            <div class="text-center"><p>Photo 5. <a href="https://en.wikipedia.org/wiki/Prada_Marfa" target="_blank">Prada Marfa</a>. Raw photo before post-processing. It's flat and boring and has distorted perspectives that impair the delivery of the photo.</p></div>
          </div>
          <div class="col-md-6 mx-auto">
            <a href="https://skylerdong.com/photography/?photo=photoid_12" target="_blank">
            <?php loadImage_photography('SD_IMG_0803_Web.jpg');?>
            </a>
            <div class="text-center"><p>Photo 6. <a href="https://en.wikipedia.org/wiki/Prada_Marfa" target="_blank">Prada Marfa</a> after post-processing. I wanted the photo to be as surrealistic — or as realistic — as having a real Prada store in the middle of nowhere.</p></div>
          </div>
        </a>
        </div><!--ROW-->
        <blockquote>I wanted to present this bizarre feeling. It's bizarre to have a green sky. It's also bizarre to have a Prada store here. I wanted the photo to be as surrealistic &mdash; or as realistic &mdash; as having a real Prada store in the middle of nowhere.</blockquote>
        <p>The finished photo presents a bizarre and serene feeling of the scenery with a twist.</p>
        <p>I also straightened the perspective and cropped a little bit to achieve a better composition, but that's beyond the scope of this blog. It might be a good topic for another blog.</p>
      </div><!--blog-color-grading-bold-->
      <div class="mb-5"><h2 id="blog-color-grading-technical" class="anchor">Technical considerations</h2>
        <p>There are two technical considerations: <a href="https://en.wikipedia.org/wiki/Raw_image_format" target="_blank">shoot RAW</a> and post-processing software.</p>
        <p>It is important to <a href="https://en.wikipedia.org/wiki/Raw_image_format" target="_blank">shoot RAW</a>, which means I ask the camera to store all unprocessed data from its sensor in the memory card without any in-camera rendering and compression. Otherwise, the camera might automatically render photos and store them in jpeg format by default, which constitutes data loss, making it harder for post-processing. <a href="https://en.wikipedia.org/wiki/Raw_image_format" target="_blank">Shooting RAW</a> gives you the maximum amount of flexibility and information for post-processing.</p>
        <p>I even <a href="https://en.wikipedia.org/wiki/Raw_image_format" target="_blank">shoot RAW</a> on my smartphone through third-party apps. Personally, I use ProShot App on my iPhone, but there are many other options.</p>
        <p>If you shoot jpeg, you will still have some room to adjust, but it will severely reduce the range of flexibility while preserving colors and details.</p>
        <p>For software, I mostly use Adobe Lightroom Classic, occasionally in combination with Adobe Photoshop, but there are free software programs, such as Apple Photo (pre-installed on every Mac computer) and free open-source software <a href="https://www.gimp.org" target="_blank">GIMP</a> (available on Linux, Windows and macOS).</p>
      </div><!--blog-color-grading-technical-->
      <div class="mb-5"><h2 id="blog-color-grading-more-examples" class="anchor">More before-and-after examples</h2>
        <p>Let me give you a few more examples.</p>
        <div class="row photo-block">
          <div class="col-md-6 mx-auto">
            <a href="https://skylerdong.com/photography/?photo=photoid_29" target="_blank">
            <?php loadImage_blog('SD_N18_3292_2_Web_raw.jpg');?>
            </a>
            <div class="text-center"><p>Before: Sunset at Lake Pflugerville 1.</p></div>
          </div>
          <div class="col-md-6 mx-auto">
            <a href="https://skylerdong.com/photography/?photo=photoid_29" target="_blank">
            <?php loadImage_photography('SD_N18_3292_Web.jpg');?>
            </a>
            <div class="text-center"><p>After: Sunset at Lake Pflugerville 1.</p></div>
          </div>
        </a>
        </div><!--ROW-->
        <div class="row photo-block">
          <div class="col-md-6 mx-auto">
            <a href="https://skylerdong.com/photography/?photo=photoid_13" target="_blank">
            <?php loadImage_blog('SD_IMG_1033_Web_raw.jpg');?>
            </a>
            <div class="text-center"><p>Before: Serenity at Bear Lake – Rocky Mountain National Park.</p></div>
          </div>
          <div class="col-md-6 mx-auto">
            <a href="https://skylerdong.com/photography/?photo=photoid_13" target="_blank">
            <?php loadImage_photography('SD_IMG_1033_Web.jpg');?>
            </a>
            <div class="text-center"><p>After: Serenity at Bear Lake – Rocky Mountain National Park.</p></div>
          </div>
        </a>
        </div><!--ROW-->
        <div class="row photo-block">
          <div class="col-md-6 mx-auto">
            <a href="https://skylerdong.com/photography/?photo=photoid_8" target="_blank">
            <?php loadImage_blog('SD_A7T00550_Web_raw.jpg');?>
            </a>
            <div class="text-center"><p>Before: The Milky Way on US Route 290.</p></div>
          </div>
          <div class="col-md-6 mx-auto">
            <a href="https://skylerdong.com/photography/?photo=photoid_8" target="_blank">
            <?php loadImage_photography('SD_A7T00550_Edit_Web.jpg');?>
            </a>
            <div class="text-center"><p>After: The Milky Way on US Route 290.</p></div>
          </div>
        </a>
        </div><!--ROW-->
        <div class="row photo-block">
          <div class="col-md-6 mx-auto">
            <a href="https://skylerdong.com/photography/?photo=photoid_72" target="_blank">
            <?php loadImage_blog('SD__A6T0234_Web_2_raw.jpg');?>
            </a>
            <div class="text-center"><p>Before: Pelicans 1 – Padre Island National Seashore.</p></div>
          </div>
          <div class="col-md-6 mx-auto">
            <a href="https://skylerdong.com/photography/?photo=photoid_72" target="_blank">
            <?php loadImage_photography('SD__A6T0234_Web.jpg');?>
            </a>
            <div class="text-center"><p>After: Pelicans 1 – Padre Island National Seashore.</p></div>
          </div>
        </a>
        </div><!--ROW-->
      </div><!--blog-color-grading-more-examples-->
      <div class="mb-5"><h2 id="blog-color-grading-final-words" class="anchor">Final words</h2>
        <p>There you go, that's basically how to do color grading. The point is to show you basic techniques and encourage you to develop your own taste and become a better artist. Making art isn't about what camera or lens you use. Some photos in this blog and in <a href="../photography" target="_blank">my photo gallery</a> were taken by my smartphones, but I bet you can't really tell.</p>
        <p>Next time you take a photo, try to be bold, freely explore the possibilities and envision the final photo even before you press the shutter.</p>
        <p>You can, of course, keep advancing your skills in color grading. There are lots of in-depth videos, blogs and books in photography and cinematography about color grading, including color theory and complex techniques (such as advanced Photoshop skills).</p>
        <p>Anyway, now you know how to do basic color grading, so why not make some art. <i class="fas fa-ankh"></i></p>
      </div><!--blog-color-grading-final-words-->
      <hr/>
      <p class="footnote mb-3">Acknowledgements: Thanks to <a href="https://instagram.com/aaront.wn?igshid=1fj61pajls9ub" target="_blank">Aaron Tang</a> for comments and edits.</p>
    </div><!--COL-->
  </div><!--ROW-->
</div><!--maincontent-->
<?php include_once '../common/footer.php';?>
</body>
</html>
