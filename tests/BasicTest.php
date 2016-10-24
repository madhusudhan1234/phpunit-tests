<?php

use App\Box;

/**
 * Class BasicTest
 */
class BasicTest extends TestCase
{
    /**
     *  This function is useful for test the function of Box class
     *  has() function checks the value
     *  if there is value in array return true
     *  Otherwise returns the false
     *  Cheers !
     */
    public function testHasItemInBox()
    {
        $box = new Box(['cat', 'toy', 'torch']);

        $this->assertTrue($box->has('toy'));
        $this->assertFalse($box->has('ball'));
    }

    /**
     *  This function is useful for the testing of takeOne Method of Box Class
     *   In which at a time one value is taken
     *   Here we can see here is one item in box
     *   when we take that item then there is empty value
     *   So this function can handle the test
     *   Cheers !
     */
    public function testTakeOneFromTheBox()
    {
        $box = new Box(['torch']);

        $this->assertEquals('torch', $box->takeOne());

        $this->assertNull($box->takeOne());
    }

    /**
     *  test function is for the startsWith method of Box class
     *  Here is the some array items instantiate with Box object
     *  the 't' value is passed to the startsWith method and
     *  It shows that there is 3 items has started with 't'
     *  so this is test
     *  Cheers !
     */
    public function testStartsWithALetter()
    {
        $box = new Box(['toy', 'torch', 'ball', 'cat', 'tissue']);

        $results = $box->startsWith('t');

        $this->assertCount(3, $results);
        $this->assertContains('toy', $results);
        $this->assertContains('torch', $results);
        $this->assertContains('tissue', $results);

        $this->assertEmpty($box->startsWith('s'));
    }
}
