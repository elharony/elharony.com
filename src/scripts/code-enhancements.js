// Add language labels and copy buttons to code blocks
document.addEventListener('DOMContentLoaded', function() {
  const preBlocks = document.querySelectorAll('pre[class*="language-"]');
  
  preBlocks.forEach(preBlock => {
    // Add language label
    const className = preBlock.className;
    const match = className.match(/language-(\w+)/);
    if (match) {
      const language = match[1];
      if (language !== 'plaintext') {
        preBlock.setAttribute('data-language', language);
      }
    }
    
    // Add copy button
    const copyButton = document.createElement('button');
    copyButton.className = 'copy-code';
    copyButton.textContent = 'Copy';
    copyButton.setAttribute('aria-label', 'Copy code to clipboard');
    
    copyButton.addEventListener('click', async () => {
      const code = preBlock.querySelector('code');
      if (code) {
        try {
          await navigator.clipboard.writeText(code.textContent);
          copyButton.textContent = 'Copied!';
          setTimeout(() => {
            copyButton.textContent = 'Copy';
          }, 2000);
        } catch (err) {
          console.error('Failed to copy code: ', err);
          copyButton.textContent = 'Error';
          setTimeout(() => {
            copyButton.textContent = 'Copy';
          }, 2000);
        }
      }
    });
    
    preBlock.appendChild(copyButton);
  });
});
