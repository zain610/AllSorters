<?php
$this->assign('title', 'Foundation System Build');
?>

<div class="container">
    <div class="jumbotron">
        <div class="row">
            <div class="col-lg-4">
                <h2>What is this?</h2>
                <p>A basic website that you are expected to modify as your first individual task in the Industry Experience project.</p>
            </div>
            <div class="col-lg-4">
                <h2>Why do we do this?</h2>
                <p>There are a couple of reasons why this is the first task we complete in this project.</p>
                <ul>
                    <li>Provide a basic understanding of the <?= $this->Html->link('technology', '#introduction-to-mvc')?> we will be using</li>
                    <li>Showcase your ability to problem solve</li>
                    <li>Ensure your laptop is setup correctly</li>
                    <li>Practice deploying a real website</li>
                </ul>
                <?= $this->Html->link('Read more', '#why-do-we-do-this') ?>
            </div>
            <div class="col-lg-4">
                <h2>What should you do?</h2>
                <p>
                    Follow the guidelines on Moodle to make a copy of this website, set it up on your local laptop, make the requested changes,
                    then deploy those changes to the IE web server.
                </p>
                <p>
                    View the <?= $this->Html->link('Properties For Sale', ['controller' => 'Properties', 'action' => 'index']) ?> listing, so that
                    you can start adding a page to display the details of each property.
                </p>
            </div>
        </div>
    </div>

    <div class="container">
        <a name="why-do-we-do-this"></a>
        <h1>Why do we do this?</h1>

        <div class="row">
            <div class="col-lg-3">
                <p>
                    <strong>Provide a basic understanding of the technology we will be using.</strong> In industry, whenever you join a new team,
                    there is a high probability you will be asked to use a technology you've never used before. Your ability to familiarise yourself
                    with that technology so that you can start using it is an important skill. This unit (and your future roles in industry) will
                    involve a large amount of self learning, so we need to get you started early.
                </p>
            </div>
            <div class="col-lg-3">
                <p>
                    <strong>Showcase your initiative and ability to think critically.</strong> For most of your university life, you may have
                    had quite clear guidelines as to exactly what is required. In industry it is a little different: Some clients have no idea
                    what they want, and it will be your job to figure it out and come up with a suitable solution. In this assessment we want
                    to provide you an opportunity to show us how you can think independently and critically, and come up with a meaningful solution
                    based on your better judgement.
                </p>
            </div>
            <div class="col-lg-3">
                <p>
                    <strong>Ensure your laptop is setup correctly.</strong> This is an individual task done before we form teams.
                    Therefore, once the teams are formed, everyone should have their laptop setup ready to contribute to the team.
                </p>
            </div>
            <div class="col-lg-3">
                <p>
                    <strong>Practice deploying a real website.</strong> At the end of this foundation system build, you will have
                    deployed a real live website to our IE web server.
                </p>
            </div>
        </div>
    </div>

    <div class="container">
        <a name="introduction-to-mvc"></a>
        <h1>A <em>(very)</em> quick introduction to MVC frameworks</h1>
        <div class="row">
            <p>
                MVC (Model/View/Controller) is one of many different architectures you might use to build a modern application.
            </p>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <h2>Model</h2>
                <p>
                    The Model in MVC refers to application logic which is responsible for talking to the database.
                    In CakePHP, you might talk to a model like this:
                </p>
                <pre>$this->loadModel('Articles');
$articles = $this->Articles->find()
            ->where(['user_id' => 3])
            ->order('created_date');</pre>
                <p>
                    If you glance at this, you will notice that it looks a little bit like SQL, but it is indeed PHP code.
                    The actual SQL which will get generated and then executed by CakePHP will look something like:
                </p>
                <pre>SELECT *
FROM articles
WHERE user_id = 3
ORDER BY created_date</pre>
                <p>(It will actually be more complex, but that is an implementation detail that is unimportant to our understanding).</p>
            </div>
            <div class="col-lg-4">
                <h2>View</h2>
                <p>
                    Views are responsible for outputing something (usually) visual to the user, such as HTML.
                </p>
                <pre>&lt;h1&gt;Recent articles&lt;h1&gt;
&lt;div class="article-list"&gt;
    &lt;div class="article"&gt;
        &lt;h2&gt;What is MVC?&lt;/h2&gt;
    &lt;/div&gt;
&lt;/div&gt;</pre>
                <p>
                    However, views are not normally <code>.html</code> files, because they typically include some sort of dynamic
                    content - such as records from a database. An example in CakePHP would be the following:
                </p>
                <pre>&lt;h1&gt;Recent articles&lt;h1&gt;
&lt;div class="article-list"&gt;
  &lt;php foreach($articles as $article): ?&gt;
    &lt;div class="article"&gt;
        &lt;h2&gt;&lt;?= $article->title ?&gt;&lt;/h2&gt;
    &lt;/div&gt;
  &lt;php endforeach ?&gt;
&lt;/div&gt;</pre>
                <p>
                    Notice how there is a mix of normal HTML code, and PHP code? The end result is that after executing
                    the PHP code, your application will return only HTML back to the users browser, such as:
                </p>
                <pre>&lt;h1&gt;Recent articles&lt;h1&gt;
&lt;div class="article-list"&gt;
    &lt;div class="article"&gt;
        &lt;h2&gt;First article&lt;/h2&gt;
    &lt;/div&gt;
    &lt;div class="article"&gt;
        &lt;h2&gt;Second article&lt;/h2&gt;
    &lt;/div&gt;
&lt;/div&gt;</pre>
                <p>
                    By doing this, we can have an arbitrary number of articles displayed in our HTML, by passing a longer
                    list of articles in the <code>$articles</code> (see "<a href="#mvc-controller">Controller</a>" for more info on how this is done).
                </p>
            </div>
            <div class="col-lg-4">
                <a name="mvc-controller" />
                <h2>Controller</h2>
                <p>Can be thought of as the "glue" which connects models with views, depending on what the user requested. It is responsible for:</p>
                <ul>
                    <li>Processes incoming requests from a user (usually HTTP requests from a web browser)</li>
                    <li>Decides which business logic to run in response (typically by asking the model to do something - insert some new data, analyse existing data, delete old data, etc)</li>
                    <li>Decide which view to present to the user, and pass the relevant data to the view (typically data from the Model, but not always)</li>
                </ul>

                <p><strong>Processing incoming requests:</strong></p>
                <pre>// By default, the 'Users' controller is available at the URL: '/users/'.
class UsersController {

  // The 'update' function is available at the URL: '/users/update/12',
  // where the number at the end is available in the $id variable below
  public function update($id) {

    // Reads the value of the &lt;input name="username" /&gt; input from the HTML form that was just submitted:
    $username = $this->getRequest()->getData('username');

    // Reads the URL's query string (e.g. "/users/update/12?category_id=1")
    $categoryId = $this->getRequest()->getQuery('category_id');

    ...
  }</pre>

                <p><strong>Decide which business logic to run:</strong></p>
                <pre>// Updates the users profile:
$user = $this->Users->get($id);
$user->username = $username;
$this->Users->save($user);

// Fetch matching users from the database...
$users = $this->Users->find()->where(['category_id' => $categoryId]);</pre>

                <p><strong>Pass data to the view for display:</strong></p>
                <pre>$this->set('user', $user);</pre>
            </div>
        </div>
    </div>
</div>
