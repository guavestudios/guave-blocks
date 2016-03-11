<section class="container" role="main">
  <div class="grid">
    <div class="grid__item sm-one-whole">
      <header>
        <h1>Testing display of HTML elements</h1>
      </header>
    </div>
    <div class="grid__item sm-one-whole">
      <header>
        <h2>This is 2nd level heading</h2>
      </header>
    </div>
    <div class="grid__item sm-one-whole">
      <header>
        <h3>h3 title</h3>
      </header>
    </div>
    <div class="grid__item sm-one-whole">
      <header>
        <h4>h4 title</h4>
      </header>
    </div>
    <div class="grid__item sm-one-whole">
      <section>
        <h3>
          Paragraphs
        </h3>
        <p>A paragraph (from the Greek paragraphos, “to write beside” or “written beside”) is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences. Though not required by the syntax of any language, paragraphs are usually an expected part of formal writing, used to organize longer prose.</p>
      </section>
      <section>
        <h3>Blockquotes</h3>
        <blockquote>
          <p>A block quotation (also known as a long quotation or extract) is a quotation in a written document, that is set off from the main text as a paragraph, or block of text.</p>
          <p>It is typically distinguished visually using indentation and a different typeface or smaller size quotation. It may or may not include a citation, usually placed at the bottom.</p>
          <cite><a href="#!">Said no one, ever.</a></cite>
        </blockquote>
      </section>
      <section>
        <h3>Lists</h3>
        <h4>Definition list</h4>
        <dl>
          <dt>Definition List Title</dt>
          <dd>This is a definition list division.</dd>
        </dl>

        <h4>Ordered List</h4>
        <ol>
          <li>List Item 1</li>
          <li>List Item 2</li>
          <li>List Item 3</li>
        </ol>

        <h4>Unordered List</h4>
        <ul>
          <li>List Item 1</li>
          <li>List Item 2</li>
          <li>List Item 3</li>
        </ul>
      </section>
      <section>
        <h3>Table</h3>
        <table>
          <caption>Table Caption</caption>
          <thead>
          <tr>
            <th>Table Heading 1</th>
            <th>Table Heading 2</th>
            <th>Table Heading 3</th>
            <th>Table Heading 4</th>
            <th>Table Heading 5</th>
          </tr>
          </thead>

          <tfoot>
          <tr>
            <th>Table Footer 1</th>
            <th>Table Footer 2</th>
            <th>Table Footer 3</th>
            <th>Table Footer 4</th>
            <th>Table Footer 5</th>
          </tr>
          </tfoot>

          <tbody>
          <tr>
            <td>Table Cell 1</td>
            <td>Table Cell 2</td>
            <td>Table Cell 3</td>
            <td>Table Cell 4</td>
            <td>Table Cell 5</td>
          </tr>
          <tr>
            <td>Table Cell 1</td>
            <td>Table Cell 2</td>
            <td>Table Cell 3</td>
            <td>Table Cell 4</td>
            <td>Table Cell 5</td>
          </tr>
          <tr>
            <td>Table Cell 1</td>
            <td>Table Cell 2</td>
            <td>Table Cell 3</td>
            <td>Table Cell 4</td>
            <td>Table Cell 5</td>
          </tr>
          <tr>
            <td>Table Cell 1</td>
            <td>Table Cell 2</td>
            <td>Table Cell 3</td>
            <td>Table Cell 4</td>
            <td>Table Cell 5</td>
          </tr>
          </tbody>
        </table>
      </section>
      <section>
        <h3>Code</h3>
        <p><strong>Inline code:</strong> <code>&lt;div&gt;code&lt;/div&gt;</code></p>
      </section>
      <section>
        <h3>Pre-formatted Text</h3>
        <pre>
          P R E F O R M A T T E D T E X T
          ! " # $ % &amp; ' ( ) * + , - . /
          0 1 2 3 4 5 6 7 8 9 : ; &lt; = &gt; ?
          @ A B C D E F G H I J K L M N O
          P Q R S T U V W X Y Z [ \ ] ^ _
          ` a b c d e f g h i j k l m n o
          p q r s t u v w x y z { | } ~
        </pre>
      </section>
      <section>
        <h3>Inline elements</h3>
        <p><a href="#!">This is a text link</a>.</p>

        <p><strong>Strong is used to indicate strong importance.</strong></p>

        <p><em>This text has added emphasis.</em></p>

        <p>The <b>b element</b> is stylistically different text from normal text, without any special importance.</p>

        <p>The <i>i element</i> is text that is offset from the normal text.</p>

        <p>The <u>u element</u> is text with an unarticulated, though explicitly rendered, non-textual annotation.</p>

        <p><del>This text is deleted</del> and <ins>This text is inserted</ins>.</p>

        <p><s>This text has a strikethrough</s>.</p>

        <p>Superscript<sup>®</sup>.</p>

        <p>Subscript for things like H<sub>2</sub>O.</p>

        <p><small>This small text is small for for fine print, etc.</small></p>

        <p>Abbreviation: <abbr title="HyperText Markup Language">HTML</abbr></p>

        <p><q cite="https://developer.mozilla.org/en-US/docs/HTML/Element/q">This text is a short inline quotation.</q></p>

        <p><cite>This is a citation.</cite>

        </p><p>The <dfn>dfn element</dfn> indicates a definition.</p>

        <p>The <mark>mark element</mark> indicates a highlight.</p>

        <p>The <var>variable element</var>, such as <var>x</var> = <var>y</var>.</p>

        <p>The time element: <time datetime="2013-04-06T12:32+00:00">2 weeks ago</time></p>
      </section>
      <section>
        <h3>
          No <code>&lt;figure&gt;</code> element
        </h3>
        <p>
          <img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=1040%C3%97693&w=1040&h=693">
        </p>
      </section>
      <section>
        <h3>Wrapped in a <code>&lt;figure&gt;</code> element, no <code>&lt;figcaption&gt;</code></h3>
        <figure>
          <img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=1040%C3%97693&w=1040&h=693">
        </figure>
      </section>
      <section>
        <h3>Wrapped in a <code>&lt;figure&gt;</code> element, with a <code>&lt;figcaption&gt;</code></h3>
        <figure>
          <img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=1040%C3%97693&w=1040&h=693">
          <figcaption>Here is a caption for this image.</figcaption>
        </figure>
      </section>
			<div class="grid__item sm-one-whole background-img">
				<h3>Div with responsive background-image</h3>
			</div>
    </div>
  </div>
</section>
