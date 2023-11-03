package make;

import java.io.IOException;
import java.net.MalformedURLException;
import java.net.URI;
import java.util.ArrayList;
import java.util.List;
import java.util.regex.Matcher;
import java.util.regex.Pattern;

import net.htmlparser.jericho.Element;
import net.htmlparser.jericho.HTMLElementName;
import net.htmlparser.jericho.Source;

/**
 * <pre class="sample-content__input">
 *     <code>
 *         #target#
 *     </code>
 * </pre>
 * 
 * ※パース出来ない時にデバッグするのでエントリポイント必要
 * 
 */
public class ParseTestCase {

	public String title;
	public List<String> testCaseList;
	
	public static void main(String[] args) {
		new ParseTestCase();
	}
	
	public ParseTestCase() {
		
		testCaseList = new ArrayList<String>();
		
		try {
			
			Source source = new Source(URI.create("file:download//index.html").toURL());

			Element temp = source.getFirstElement(HTMLElementName.TITLE);
			Pattern p = Pattern.compile("[A-Z]\\d{3}");
			Matcher m = p.matcher(temp.toString());
			if (m.find()) {
				// System.out.println(m.group());
				title = m.group();
			}
			
			List<Element> preList = source.getAllElements(HTMLElementName.PRE);
			for (Element e : preList) {
				String str = e.getAttributeValue("class");
				if (str != null) {
					if (e.getAttributeValue("class").equals("sample-content__input")) {
						List<Element> codeList = e.getContent().getAllElements(HTMLElementName.CODE);
						for (Element code : codeList) {
							// System.out.println(code.getContent().toString());
							// System.out.println("-----------------------------------------------");
							testCaseList.add(code.getContent().toString());
						}
					}
				}
			}
			
		} catch (MalformedURLException e) {
			e.printStackTrace();
		} catch (IOException e) {
			e.printStackTrace();
		}
	}
}
