


<!DOCTYPE html>
<html>
<head>
	<title>`</title>
	<style type="text/css">
		@import "lesshat";

@starColour: #16a085;
@starHoverColour: #1abc9c;

.star-rating {
  font-family: 'FontAwesome';
  margin: 50px auto;

  > fieldset {
    border: none;
    display: inline-block;

    &:not(:checked) {
      > input {
        position: absolute;
        top: -9999px;
        clip: rect(0,0,0,0);
      }

      > label {
        float: right;
        width: 1em;
        padding: 0 .05em;
        overflow: hidden;
        white-space: nowrap;
        cursor: pointer;
        font-size: 200%;
        color: @starColour;

        &:before {
          content: '\f006  ';
        }

        &:hover,
        &:hover ~ label {
          color: @starHoverColour;
          text-shadow: 0 0 3px @starHoverColour;
          &:before {
            content: '\f005  ';
          }
        }
      }
    }

    > input:checked {
      & ~ label {
        &:before {
          content: '\f005  ';
        }
      }
    }

    > label:active {
      position: relative;
      top: 2px;
    }
  }
}

body {
  background: #262829;
  color: #95a5a6;
  font-family: 'Raleway';
  text-align: center;

  p {
    font-size: 1.6em;
    margin: auto;
    width: 80%;
  }

  a {
    color: @starColour;
  }
}
	</style>
</head>
<body>
<div class="star-rating">
  <fieldset>
    <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Outstanding">5 stars</label>
    <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Very Good">4 stars</label>
    <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Good">3 stars</label>
    <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Poor">2 stars</label>
    <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Very Poor">1 star</label>
  </fieldset>
</div>
<h1>CSS Star Rating</h1>
<p>Simplified version of Lea Verou's <a href="http://lea.verou.me/2011/08/accessible-star-rating-widget-with-pure-css/">accessible star rating widget</a> using FontAwesome to display empty stars</p>
</body>
</html>