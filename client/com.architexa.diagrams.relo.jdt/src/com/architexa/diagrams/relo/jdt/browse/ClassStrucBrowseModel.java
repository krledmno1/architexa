/* 
 * Copyright (c) 2004-2005 Massachusetts Institute of Technology. This code was
 * developed as part of the Haystack (http://haystack.lcs.mit.edu/) research 
 * project at MIT. Permission is hereby granted, free of charge, to any person
 * obtaining a copy of this software and associated documentation files (the 
 * "Software"), to deal in the Software without restriction, including without 
 * limitation the rights to use, copy, modify, merge, publish, distribute, 
 * sublicense, and/or sell copies of the Software, and to permit persons to whom
 * the Software is furnished to do so, subject to the following conditions: 
 * 
 * The above copyright notice and this permission notice shall be included in 
 * all copies or substantial portions of the Software. 
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR 
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, 
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE 
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER  
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, 
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE. 
 */
/*
 * Created on Mar 5, 2005
 *
 */
package com.architexa.diagrams.relo.jdt.browse;

import com.architexa.diagrams.jdt.RJCore;
import com.architexa.diagrams.relo.agent.IncludedRelationshipsAsserter;
import com.architexa.diagrams.relo.agent.ParentAsserter;
import com.architexa.diagrams.relo.agent.RelationshipsManager;


/**
 * @author vineet
 *
 */
public class ClassStrucBrowseModel extends AbstractJDTBrowseModel {
    
	public ClassStrucBrowseModel() {
		
		//disabled since agent is part of chunking (next release) 
		//agents.add(new PathElementsAsserter(RelType
		//		.getRel(RJCore.inherits)
		//		.joinRevRel(RJCore.inherits)));
		agents.add(new IncludedRelationshipsAsserter(RJCore.inherits));
		//agents.add(new FocusedAsserter());
		//agents.add(new SizeManager());
		agents.add(new ParentAsserter());
		agents.add(new RelationshipsManager());
	}

}
