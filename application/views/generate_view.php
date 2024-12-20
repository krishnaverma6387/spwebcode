<!-- HTML Form for input -->
<form action="<?php echo base_url('ai/generate'); ?>" method="post">
    <label for="prompt">Enter your prompt:</label><br>
    <input type="text" id="prompt" name="prompt"><br><br>
    <button type="submit">Generate Content</button>
</form>
